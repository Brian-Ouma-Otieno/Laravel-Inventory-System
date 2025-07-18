@extends('layouts.app')

@section('content')
    <h2>Edit Supplier</h2>

    <form action="{{ route('suppliers.update', $supplier) }}" method="POST" style="display:inline-block;">
        <a href="{{ route('suppliers.index') }}" class="btn btn-primary mb-3">Back</a>
        @csrf
        @method('PUT')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact Person</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="name" id="" value="{{ $supplier->name }}">
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                    <input type="text" name="contact_person" value="{{ $supplier->contact_person }}">
                        @error('contact_person')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                    <input type="text" name="phone" id="" value="{{ $supplier->phone }}">
                        @error('phone')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        <input type="text" name="email" id="" value="{{ $supplier->email }}">
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        <input type="text" name="address" id="" value="{{ $supplier->address }}">
                        @error('address')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>

                    <td>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>

                    </td>
                </tr>
            </tbody>
        </table>
    </form>
@endsection




