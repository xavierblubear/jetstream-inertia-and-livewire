<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Shared\Gateways\Contracts\{
    MailerGateway,
    SugarApiGateway
};
use Modules\Shared\Gateways\SugarCrm\SugarCrmApiGateway;
use Modules\Shared\Gateways\SymfonyMailer\SymfonyMailerGateway;

class GatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(MailerGateway::class, SymfonyMailerGateway::class);
        $this->app->bind(SugarApiGateway::class, SugarCrmApiGateway::class);
    }
}
