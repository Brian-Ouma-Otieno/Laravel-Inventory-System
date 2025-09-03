@extends('forms.form-head')

@section('form.content')

    <title>SignUp</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="border p-4 rounded bg-light w-25" action="{{ route('form.signup') }}" method="post">
            @csrf
            <h5 class="text-center">SIMPLE INVENTORY MANAGEMENT SYSTEM</h5>
            <h2 class="mb-3 text-center">SignUp</h2>

                <div class="">
                    <input class="form-control" type="text" name="username" id="" placeholder="Username" value="{{ old('username') }}"><br>
                    @error('username')
                        <div class="text-danger"> {{  $message }} </div>
                    @enderror
                </div>
                <div class="">
                    <input class="form-control" type="text" name="email" id="" placeholder="Email" value="{{ old('email') }}"><br>
                    @error('email')
                        <div class="text-danger"> {{  $message }} </div>
                    @enderror
                </div>
                <div class="">
                    <input class="form-control" type="password" name="password" id="" placeholder="Password"><br>
                    @error('password')
                        <div class="text-danger"> {{  $message }} </div>
                    @enderror
                </div>
                <div class="">
                    <input class="form-control" type="password" name="password_confirmation" id="" placeholder="Confirm Password">
                </div>

            <button class="btn btn-success w-100" type="submit">SignUp</button> <br>
            <p class="mt-2 text-primary">Login insted: <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>

@endsection
