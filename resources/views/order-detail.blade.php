@extends('layouts.web')
@section('content')
<div class="min-h-screen bg-base-200">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Order Details</h2>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Booking Code:</span>
                    <span class="text-gray-800 font-semibold">#{{ $order->booking_code }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Customer Name:</span>
                    <span class="text-gray-800 font-semibold">{{ $order->name }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Email:</span>
                    <span class="text-gray-800 font-semibold">{{ $order->email }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Phone:</span>
                    <span class="text-gray-800 font-semibold">{{ $order->phone }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Room Type:</span>
                    <span class="text-gray-800 font-semibold">{{ $order->room_type }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Check-in Date:</span>
                    <span class="text-gray-800 font-semibold">{{ $order->check_in->format('d M Y') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-gray-600">Check-out Date:</span>
                    <span class="text-gray-800 font-semibold">{{ $order->check_out->format('d M Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection