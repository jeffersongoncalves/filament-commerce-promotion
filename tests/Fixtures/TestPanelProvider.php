<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Promotion\CommercePromotionPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommercePromotionPlugin::make(),
            ]);
    }
}
