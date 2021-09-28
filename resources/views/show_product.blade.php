@extends('template')

@section('title', 'Show Product')

@section('content')
<a href="/product">Go Back</a><br><br>
<h3>Show product edit</h3><br>


<form action="/product/{{ $product->id }}/save_edit" method="POST">
    @csrf
    @method('PUT')

    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="" value="{{ $product->product_name }}"><br>

    <label for="product_description">Product Description</label>
    <input type="text" name="product_description" id="" value="{{ $product->product_description }}"><br>

    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="" value="{{ $product->quantity }}"><br>

    <label for="price">Price</label>
    <input type="text" name="price" id="" value="{{ $product->price }}"><br>

    <label for="price">Status</label>
    <select class="form-control" name="status">
        <option selected="{{ $product->status }}">{{ $product->status }}</option>
        <option>Enable</option>
        <option>Disable</option>
    </select><br>

    <button type="submit" class="button-save">Save Edit</button>
</form>
@endsection