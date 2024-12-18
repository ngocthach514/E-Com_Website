@extends('layouts.app')

@section('title', 'Manage Products')

@section('content')
    <h1>Manage Products</h1>
    <a href="{{ route('admin.products.create') }}">Add New Product</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Thêm nội dung khác cho quản lý sản phẩm -->
@endsection
