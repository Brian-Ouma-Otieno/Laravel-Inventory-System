<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('form.login') }}" method="post">
        @csrf
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif --}}
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
        <button type="submit">Login</button> <br>
        <p>if a/c exist login insted: <a href="{{ route('signup') }}">SignUp</a></p>
    </form>
</body>
</html>
