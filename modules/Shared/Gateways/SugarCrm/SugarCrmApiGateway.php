<?php

namespace Modules\Shared\Gateways\SugarCrm;

use Modules\Shared\Gateways\Contracts\SugarApiGateway;

class SugarCrmApiGateway implements SugarApiGateway
{
  public function createTicket()
  {
    return 'Ticket created!';
  }
}