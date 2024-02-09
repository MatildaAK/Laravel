<!DOCTYPE html>
<html>
<head>
<title>All orders</title>
</head>
<body>
    <h1>Order</h1>
    <ul>
        @foreach ($orders as $order)
        <li>{{ $order->item }} kostar
        {{ $order->cost }} och levereras till oss om 
        {{ $order->estimation }} dagar.</li>
        @endforeach
    </ul>
</body>
