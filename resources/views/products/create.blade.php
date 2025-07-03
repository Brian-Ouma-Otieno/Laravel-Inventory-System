@extends('layouts.app')

@section('content')
    <h2>Add Products</h2>

    <form action="{{ route('products.store') }}" method="POST" style="display:inline-block;">
        <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Back</a>
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>SKU(Stock Keeping Unit)</th>
                    <th>Supplier</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="name" id="" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                    <textarea type="text" name="description" value="{{ old('description') }}"></textarea>
                        @error('description')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                    <input type="text" name="sku" id="" value="{{ old('sku') }}">
                        @error('sku')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        <select name="supplier_id" id="" selected>
                            <option value="">Select Supplier</option>
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id  }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="supplier" id="" value="{{ old('supplier') }}">
                        @error('supplier')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror --}}
                    </td>

                    <td>
                        <input type="text" name="price" id="" value="{{ old('price') }}">
                        @error('price')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        {{-- <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>

                    </td>
                </tr>
            </tbody>
        </table>
    </form>
@endsection


