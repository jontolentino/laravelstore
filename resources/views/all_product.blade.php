@extends('template')

@section('title', 'All Products')

@section('content')
    <a href="/">Go Back</a><br><br>
    <h3>All Product</h3><br>

    @foreach ($products as $product)
        @if ($product->status != "Disable")
            <div class="product-item">
                <p><strong>Name: </strong>{{ $product->product_name }}</p>
                <p><strong>Description: </strong>{{ $product->product_description }}</p>
                <p><strong>Price: ₱</strong>{{ $product->price }}/each</p>
                <p><a href="/product/{{$product->id}}/show_edit">Edit</a></p>
            </div>
        @endif
    @endforeach
    <br>
    <h4>Disabled Products</h4><br>
    @foreach ($products as $product)
        @if ($product->status != "Enable")
            <div class="product-item disabled-product">
                <p><strong>Name: </strong>{{ $product->product_name }}</p>
                <p><strong>Description: </strong>{{ $product->product_description }}</p>
                <p><strong>Price: ₱</strong>{{ $product->price }}/each</p>
                <p><a href="/product/{{$product->id}}/show_edit">Edit</a></p>
            </div>
        @endif
    @endforeach
@endsection
