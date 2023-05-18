<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $componentDirectory = resource_path('views/website/components');
        $this->registerWebsiteBladeComponents($componentDirectory);
    }

    private function registerWebsiteBladeComponents($directory, $namespace = 'website.components.')
    {
        $componentFiles = File::allFiles($directory);

        foreach ($componentFiles as $file) {
            $componentName = $file->getBasename('.blade.php');
            if ($file->getRelativePath() == "") {
                Blade::component($namespace . $componentName, $componentName);
            } else {
                $subdirectory = $file->getRelativePath();
                $subNamespace = $namespace . str_replace(DIRECTORY_SEPARATOR, '.', $subdirectory) . '.';
                Blade::component($subNamespace . $componentName, $componentName);
            }
        }
    }
}
