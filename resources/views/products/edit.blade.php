@extends('layouts.app')

@section('content')
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product) }}" method="POST" style="display:inline-block;">
        <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Back</a>
        @csrf
        @method('PUT')
        <table class="table table-bordered table-sm">
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
                        <input type="text" name="name" id="" value="{{ $product->name }}">
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                    <textarea type="text" name="description" value="{{ $product->description }}"></textarea>
                        @error('description')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                    <input type="text" name="sku" id="" value="{{ $product->sku }}">
                        @error('sku')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        <select name="supplier" id="" selected>
                            <option value="" selected disabled>-- Select a Supplier --</option>
                            @foreach ($suppliers as $supplier)
                                <option name='supplier' {{ old('supplier') == 'selected'}} value="{{ $supplier->id  }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                        @error('supplier')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        <input type="text" name="price" id="" value="{{ $product->price }}">
                        @error('price')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        {{-- <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>

                    </td>
                </tr>
            </tbody>
        </table>
    </form>
@endsection



