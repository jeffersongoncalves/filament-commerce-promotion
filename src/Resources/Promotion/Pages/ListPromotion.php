<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\PromotionResource;

class ListPromotion extends ListRecords
{
    protected static string $resource = PromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
