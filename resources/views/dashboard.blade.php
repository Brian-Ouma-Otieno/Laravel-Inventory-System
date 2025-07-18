@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Dashboard</h2>
        <div class="row mt-4 d-flex justify-content-center align-items-center">
            <div class="col-md-3">
                <div class="card bg-light border-primary">
                    <div class="card-body text-center">
                        <h5>Total Products</h5>

                        @if ($totalProducts < 0)
                            <p class="fs-4 text-primary">No Added Products</p>
                        @endif

                        @if ($totalProducts <= 5)
                            <p class="fs-4 text-danger">{{ $totalProducts }}</p>
                            <p class="fs-4 text-danger">Low Products</p>
                        @else
                            <p class="fs-4 text-success">{{ $totalProducts }}</p>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light border-success">
                    <div class="card-body text-center">
                        <h5>Total Suppliers</h5>
                        <p class="fs-4">{{ $totalSuppliers }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

