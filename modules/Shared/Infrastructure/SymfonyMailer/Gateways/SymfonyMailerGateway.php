<?php

namespace Modules\Shared\Infrastructure\SymfonyMailer\Gateways;

use Modules\Shared\Domain\Contracts\Gateways\MailerGateway;

class SymfonyMailerGateway implements MailerGateway
{
  public function sendMail()
  {
    return 'Mail sent!';
  }
}