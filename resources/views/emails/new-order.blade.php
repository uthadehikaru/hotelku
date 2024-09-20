<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order - Booking Code #{{ $order->booking_code }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ config('app.name') }}</h1>
        </div>
        <div class="content">
            <h2>Order Details</h2>
            <p><strong>Booking Code:</strong> #{{ $order->booking_code }}</p>
            <p><strong>Customer Name:</strong> {{ $order->name }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>
            <p><strong>Phone:</strong> {{ $order->phone }}</p>
            <p><strong>Room Type:</strong> {{ $order->room_type }}</p>
            <p><strong>Check-in Date:</strong> {{ $order->check_in->format('d M Y') }}</p>
            <p><strong>Check-out Date:</strong> {{ $order->check_out->format('d M Y') }}</p>
            <a href="{{ route('order.detail', $order->booking_code) }}" class="btn btn-primary">View Order</a>
        </div>
        <div class="footer">
            <p>This is an automated email. Please do not reply.</p>
        </div>
    </div>
</body>
</html>
