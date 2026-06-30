<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Promotion\Models\Promotion;
use JeffersonGoncalves\FilamentCommerce\Promotion\CommercePromotionPlugin;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages\CreatePromotion;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages\EditPromotion;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages\ListPromotion;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Schemas\PromotionForm;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Tables\PromotionTable;

class PromotionResource extends Resource
{
    protected static ?string $model = Promotion::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommercePromotionPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-promotion.navigation_group', 'Commerce — Growth');
        }
    }

    public static function form(Form $form): Form
    {
        return PromotionForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return PromotionTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPromotion::route('/'),
            'create' => CreatePromotion::route('/create'),
            'edit' => EditPromotion::route('/{record}/edit'),
        ];
    }
}
