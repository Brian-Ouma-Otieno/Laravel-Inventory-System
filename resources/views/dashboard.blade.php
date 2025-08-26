{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>  --}}



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
