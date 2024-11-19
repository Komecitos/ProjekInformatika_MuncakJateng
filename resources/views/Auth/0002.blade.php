<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .register-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .register-container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
        }

        .form-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-link a {
            color: #007bff;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <h2>Registrasi</h2>

        @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit">Daftar</button>
            </div>
        </form>

        <div class="form-link">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
        </div>

        <div class="form-link">
            <p>Setelah mendaftar, cek email Anda untuk verifikasi.</p>
        </div>
    </div>

</body>

</html>