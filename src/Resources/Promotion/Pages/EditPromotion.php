<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\PromotionResource;

class EditPromotion extends EditRecord
{
    protected static string $resource = PromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
