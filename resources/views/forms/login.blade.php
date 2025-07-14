@extends('forms.form-head')

@section('form.content')

    <title>Login</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="border p-4 rounded bg-light w-25" action="{{ route('form.login') }}" method="post">
            @csrf
            <h2 class="mb-3 text-center">Login</h2>
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
            <button class="btn btn-success w-100" type="submit">Login</button> <br>
            <p class="mt-2 text-primary">SignUp insted: <a href="{{ route('signup') }}">SignUp</a></p>
        </form>
    </div>

@endsection

