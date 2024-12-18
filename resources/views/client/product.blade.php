@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <button>Add to Cart</button>
    <!-- Thêm nội dung khác cho trang sản phẩm -->
@endsection
