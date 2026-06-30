<?php

namespace JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class PromotionForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('code'),
                    ])->columns(2),
            ]);
    }
}
