<?php

namespace Modules\Shared\Infrastructure\SugarCrm\Gateways;

use Modules\Shared\Domain\Contracts\Gateways\SugarApiGateway;

class SugarCrmApiGateway implements SugarApiGateway
{
  public function createTicket()
  {
    return 'Ticket created!';
  }
}