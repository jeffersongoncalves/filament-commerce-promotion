<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommercePromotionPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-promotion';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Growth';
    }
}
