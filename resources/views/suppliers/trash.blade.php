@extends('layouts.app')

@section('content')
<h2>Trash Data</h2>
<a href="{{ route('suppliers.index') }}" class="btn btn-primary mb-3">Back</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact person</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->contact_person }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->address }}</td>
            <td>
                <a href="{{ route('suppliers.restore', $supplier) }}" class="btn btn-sm btn-warning">Restore</a>
                <form action="{{ route('suppliers.permanent.delete', $supplier->id) }}" method="POST" style="display:inline-block;">
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


