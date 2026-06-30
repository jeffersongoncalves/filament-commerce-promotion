<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommercePromotionServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-promotion';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
