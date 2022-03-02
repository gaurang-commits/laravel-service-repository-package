<?php

namespace Gaurang\LaravelServiceRepository;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Gaurang\LaravelServiceRepository\Commands\Make\LspCommand;
use Gaurang\LaravelServiceRepository\Commands\Make\RepositoryCommand;
use Gaurang\LaravelServiceRepository\Commands\Make\ServiceCommand;

class LaravelServiceRepositoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-service-repository')
            ->hasConfigFile()
            ->hasCommand(ServiceCommand::class)
            ->hasCommand(RepositoryCommand::class);
    }
}
