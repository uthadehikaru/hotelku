<?php

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use App\Models\User;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('can list orders', function () {
    $this->get(OrderResource::getUrl('index'))->assertSuccessful();
});

it('can submit order form', function () {
    $this->livewire('OrderForm')
        ->set('name', 'John Doe')
        ->set('email', 'john@example.com')
        ->set('phone', '1234567890')
        ->set('room_type', 'Single')
        ->set('check_in', '2024-01-01')
        ->set('check_out', '2024-01-02')
        ->call('submit')
        ->assertSuccessful();

    $order = Order::where('email', 'john@example.com')->first();

    $this->get(route('order.detail', $order->booking_code))->assertSuccessful();
});
