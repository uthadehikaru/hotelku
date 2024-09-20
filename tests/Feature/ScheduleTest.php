<?php

use App\Filament\Resources\ScheduleResource;
use App\Models\User;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can list schedules', function () {
    $this->get(ScheduleResource::getUrl('index'))->assertSuccessful();
});
