@extends('layouts.app')

@section('content')
    <h2>Product Details</h2>
    <p><strong>Product ID:</strong> {{ $product->product_id }}</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>

    @if ($product->image)
       <p><strong>Image:</strong> <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200"></p>
    @endif


    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
@endsection
