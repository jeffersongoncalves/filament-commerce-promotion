<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PromotionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('code'),
                    ])->columns(2),
            ]);
    }
}
