<?php

namespace Modules\Inventory\Services;

use Modules\Inventory\Repositories\Contracts\CarRepository;
use Modules\Shared\Gateways\Contracts\MailerGateway;
use Modules\Shared\Gateways\Contracts\SugarApiGateway;

class CarService
{
  protected $carRepository;
  protected $mailer;
  protected $sugarCrm;

  public function __construct(CarRepository $carRepository, MailerGateway $mailer, SugarApiGateway $sugarCrm)
  {
    $this->carRepository = $carRepository;
    $this->mailer = $mailer;
    $this->sugarCrm = $sugarCrm;
  }

  public function filterByCriteria($criteria)
  {
    $mailMessage = $this->mailer->sendMail();
    $ticketMessage = $this->sugarCrm->createTicket();

    return [
      'cars' => $this->carRepository->withCriteria($criteria)->get(),
      'mailMessage' =>  $mailMessage,
      'ticketMessage' => $ticketMessage
    ];
  }

  public function repository()
  {
    return $this->carRepository;
  }
}