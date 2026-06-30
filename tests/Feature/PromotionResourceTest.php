<?php

use JeffersonGoncalves\Commerce\Promotion\Models\Promotion;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages\CreatePromotion;
use JeffersonGoncalves\FilamentCommerce\Promotion\Resources\Promotion\Pages\ListPromotion;
use Livewire\Livewire;

it('renders the promotion list page', function () {
    Promotion::factory()->count(2)->create();

    Livewire::test(ListPromotion::class)->assertOk();
});

it('creates a promotion record through the panel', function () {
    Livewire::test(CreatePromotion::class)
        ->fillForm([
            'code' => 'SAVE10',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Promotion::query()->count())->toBe(1);
});
