<?php

namespace Gaurang\LaravelServiceRepository;

use Gaurang\LaravelServiceRepository\Commands\Make\RepositoryCommand;
use Gaurang\LaravelServiceRepository\Commands\Make\ServiceCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
