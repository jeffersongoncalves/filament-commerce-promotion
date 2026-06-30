<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Promotion\Concerns\HasCommercePromotionPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\PromotionResource;

class CommercePromotionPlugin implements Plugin
{
    use HasCommercePromotionPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-promotion';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'promotion' => PromotionResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
