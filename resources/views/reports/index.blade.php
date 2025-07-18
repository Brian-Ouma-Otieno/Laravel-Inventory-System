@extends('layouts.app')

@section('content')
<h2>Reports</h2>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card border-info">
            <div class="card-body">
                <h5 class="card-title">Low Stock Products</h5>
                {{-- @if (count($lowStockProducts) > 0) --}}
                    <ul class="list-group">
                        {{-- @foreach ($lowStockProducts as $product) --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{-- {{ $product->name }} --}}
                                {{-- <span class="badge bg-danger">{{ $product->current_stock }} left</span> --}}
                            </li>
                        {{-- @endforeach --}}
                    </ul>
                {{-- @else --}}
                    <p>No low stock alerts 🎉</p>
                {{-- @endif --}}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border-secondary">
            <div class="card-body">
                <h5 class="card-title">Product Stock Summary</h5>
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($allProducts as $product) --}}
                            <tr>
                                {{-- <td>{{ $product->name }}</td> --}}
                                {{-- <td>{{ $product->current_stock }}</td> --}}
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

