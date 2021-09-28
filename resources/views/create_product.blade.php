@extends('template')

@section('title', 'Create Product')

@section('content')
<a href="/">Go Back</a><br><br>
<h3>Create Product</h1>
<br>
<form action="/product/save" method="POST">
    @csrf

    <label for="product_name">Product Name</label><br>
    <input type="text" name="product_name" id=""><br>

    <label for="product_description">Product Description</label><br>
    <input type="text" name="product_description" id=""><br>

    <label for="quantity">Quantity</label><br>
    <input type="text" name="quantity" id=""><br>

    <label for="price">Price</label><br>
    <input type="text" name="price" id=""><br>

    <button type="submit">Submit</button>
    
</form>
@endsection
