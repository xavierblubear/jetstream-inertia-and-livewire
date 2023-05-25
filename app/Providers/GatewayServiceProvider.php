<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Shared\Domain\Contracts\Gateways\{
    MailerGateway,
    SugarApiGateway
};
use Modules\Shared\Infrastructure\SugarCrm\Gateways\SugarCrmApiGateway;
use Modules\Shared\Infrastructure\SymfonyMailer\Gateways\SymfonyMailerGateway;

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
