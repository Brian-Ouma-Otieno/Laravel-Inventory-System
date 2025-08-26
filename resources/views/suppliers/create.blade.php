@extends('layouts.app')

@section('content')
    <h2>Add Supplier</h2>


    <form action="{{ route('suppliers.store') }}" method="POST" style="display:inline-block;">
        <a href="{{ route('suppliers.index') }}" class="btn btn-primary mb-3">Back</a>
        @csrf
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
                        <input type="text" name="name" id="" value="{{ old('name') }}">                   
                        @error('name')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror                   
                    </td>
                    
                    <td>
                    <input type="text" name="contact_person" value="{{ old('contact_person') }}">
                        @error('contact_person')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>
                    
                    <td>
                    <input type="text" name="phone" id="" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>
                    
                    <td>
                        <input type="text" name="email" id="" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>
                    
                    <td>
                        <input type="text" name="address" id="" value="{{ old('address') }}">
                        @error('address')
                            <div class="alert alert-danger"> {{ $message }}  </div>
                        @enderror
                    </td>
                    
                    <td>                               
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>                        
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
@endsection



