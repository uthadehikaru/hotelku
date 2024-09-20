@extends('layouts.web')
@section('content')
<div class="min-h-screen bg-base-200">
    <div class="container mx-auto px-4 pt-10">
        <div class="alert alert-success shadow-lg mb-10">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Pemesanan telah dibuat. Kami akan segera mengonfirmasi pemesanan Anda.</span>
            </div>
        </div>
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