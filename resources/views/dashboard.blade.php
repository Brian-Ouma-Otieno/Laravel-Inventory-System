@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Dashboard</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-light border-primary">
                    <div class="card-body text-center">
                        <h5>Total Products</h5>
                        {{-- <p class="fs-4">{{ $totalProducts }}</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light border-success">
                    <div class="card-body text-center">
                        <h5>Total Suppliers</h5>
                        {{-- <p class="fs-4">{{ $totalSuppliers }}</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light border-info">
                    <div class="card-body text-center">
                        <h5>Stock In</h5>
                        {{-- <p class="fs-4">{{ $stockIn }}</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-light border-danger">
                    <div class="card-body text-center">
                        <h5>Stock Out</h5>
                        {{-- <p class="fs-4">{{ $stockOut }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

