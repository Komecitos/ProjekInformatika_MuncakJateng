<!DOCTYPE html>
<html lang="en">
@vite('resources/js/app.js')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="login">Email atau Username</label>
                <input type="text" name="login" id="login" required value="{{ old('login') }}">
                @error('login')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>

        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
    </div>
</body>

</html>