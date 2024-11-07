@extends('layouts.app')

@section('content')
<h2 class="mb-4">Product List</h2>

<!-- Search Form -->
<form action="{{ route('products.index') }}" method="GET" class="row g-3 mb-4">
    <div class="col-auto">
        <input type="text" name="search" class="form-control" placeholder="Search by ID or description" value="{{ request()->search }}">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>

<!-- Product Table -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th><a href="?sort=name&direction={{ request('direction') == 'asc' ? 'desc' : 'asc' }}">Name</a></th>
            <th><a href="?sort=price&direction={{ request('direction') == 'asc' ? 'desc' : 'asc' }}">Price</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination -->
<div class="d-flex justify-content-center">
    {{ $products->links('pagination::bootstrap-5') }}
</div>
@endsection
