<?php

namespace Modules\Inventory\Services;

use Illuminate\Database\Eloquent\Collection;
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
    /**
     * Obtener busqueda mediante Meilisearch con filtros aplicados
     *
     * @param  ...$criteria
     * @param string $search
     * @param mixed $callback
     * @return Collection
     */
    public function filterByCriteriaAndSearch($criteria, string $search = '', mixed $callback = null): Collection
    {
        return $this->carRepository->search($search, $callback)->withCriteriaSearch($criteria)->get();
    }
    public function repository()
    {
        return $this->carRepository;
    }
}
