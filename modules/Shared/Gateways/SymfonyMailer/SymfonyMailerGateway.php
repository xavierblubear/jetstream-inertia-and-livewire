<?php

namespace Modules\Shared\Gateways\SymfonyMailer;

use Modules\Shared\Gateways\Contracts\MailerGateway;

class SymfonyMailerGateway implements MailerGateway
{
  public function sendMail()
  {
    return 'Mail sent!';
  }
}