@extends('template')

@section('title', 'Jon Menustore Laravel')

@section('content')
    <div class="nav-item">
        <a href="/product">All Products</a>
    </div>
    <div class="nav-item">
        <a href="/order">Orders</a>
    </div>
    <div class="nav-item">
        <a href="/product/create">Create Product</a>
    </div>
@endsection