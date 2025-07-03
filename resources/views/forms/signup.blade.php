<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
</head>
<body>
    <form action="{{ route('form.signup') }}" method="post">
        @csrf
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif --}}
        <div class="">
            <input type="text" name="username" id="" placeholder="Username" value="{{ old('username') }}"><br>
            @error('username')
                {{ $message }}
            @enderror
        </div>
        <div class="">
            <input type="text" name="email" id="" placeholder="Email" value="{{ old('email') }}"><br>
            @error('email')
                {{ $message }}
            @enderror
        </div>
        <div class="">
            <input type="password" name="password" id="" placeholder="Password"><br>
            @error('password')
                {{ $message }}
            @enderror
        </div>
        <div class="">
            <input type="password" name="password_confirmation" id="" placeholder="Confirm Password">
        </div>
        <button type="submit">SignUp</button> <br>
        <p>if a/c exist login insted: <a href="{{ route('login') }}">Login</a></p>
    </form>
</body>
</html>
