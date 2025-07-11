<?php

namespace Bpnpdl\SmsFilament;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bpnpdl\SmsFilament\Commands\SmsFilamentCommand;

class SmsFilamentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sms-filament')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sms_filament_table')
            ->hasCommand(SmsFilamentCommand::class);
    }
}
