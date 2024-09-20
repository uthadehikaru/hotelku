<?php

use App\Filament\Resources\RoomResource;
use App\Models\User;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can list rooms', function () {
    $this->get(RoomResource::getUrl('index'))->assertSuccessful();
});
