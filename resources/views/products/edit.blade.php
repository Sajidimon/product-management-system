@extends('layouts.app')

@section('content')
<h2>Edit Product</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="product_id" class="form-label">Product ID:</label>
        <input type="text" id="product_id" name="product_id" class="form-control" value="{{ $product->product_id }}" required>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea id="description" name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock }}">
    </div>

    <button type="submit" class="btn btn-warning">Update</button>
</form>
@endsection
