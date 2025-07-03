@extends('layouts.app')

@section('content')
<h2>Products</h2>
<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>SKU</th>
            <th>Supplier</th>
            <th>Price</th>
            {{-- <th>Stock</th> --}}
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <select name="supplier" id="" selected>
                <option value=""></option>
                <option value="">{{ $product->getSupplier->name }}</option>
            </select>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->getSupplier->name }}</td>
            <td>{{ $product->price }}</td>
            {{-- <td>{{ $product->current_stock }}</td> --}}
            <td>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

