<?php

namespace Modules\Shared\Gateways\SugarCrm;

use Modules\Shared\Gateways\Contracts\SugarAPiGateway;

class SugarCrmApiGateway implements SugarAPiGateway
{
  public function createTicket()
  {
    return 'Ticket created!';
  }
}