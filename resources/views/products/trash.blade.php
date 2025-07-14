@extends('layouts.app')

@section('content')
<h2>Trashed Data</h2>
<a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Back</a>

<table class="table table-bordered table-sm">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>SKU</th>
            <th>Supplier</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->getSupplier->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.restore', $product) }}" class="btn btn-sm btn-warning">Restore</a>
                <form action="{{ route('products.permanent.delete', $product->id) }}" method="POST" style="display:inline-block;">
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

