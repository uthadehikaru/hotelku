<?php

namespace App\Livewire;

use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class OrderForm extends Component
{
    public $name;

    public $email;

    public $phone;

    public $room_type;

    public $check_in;

    public $check_out;

    public function render()
    {
        return view('livewire.order-form');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits_between:10,20',
            'room_type' => 'required|in:Single,Double,Suite',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        $order = Order::create([
            'booking_code' => strtoupper(Str::random(5)),
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'room_type' => $this->room_type,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
        ]);

        Mail::to(config('mail.from.address'))->send(new NewOrder($order));

        $this->dispatch('message', title: 'Pesanan berhasil dibuat.', message: 'Kami akan segera menghubungi Anda untuk konfirmasi pemesanan.');

        $this->redirect(route('order.detail', $order->booking_code));
    }
}
