<?php

namespace Modules\Shared\Domain\Contracts\Gateways;

interface MailerGateway
{
  public function sendMail();
}

