@extends('template')

@section('title', 'Show Orders')


@section('content')
    <a href="/">Go Back</a><br><br>
    <p>Sorry not sure how to query the product using the foreign key. - Jon</p>
    <br>
    <h3>ORDERS HERE</h1>

    @foreach ($orders as $order)
    <div class="order-item">
    <p><strong>Order ID: </strong>{{ $order->product_id }}</p>
        <p><strong>Customer ID: </strong>{{ $order->customer_id}}</p>
        <p><strong>Product Price: </strong>{{ $order->price}}</p>
    </div>
    
    @endforeach

@endsection
