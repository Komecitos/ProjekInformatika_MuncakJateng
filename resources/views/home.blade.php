<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJv3pN4v2hf3swg9v7qNYyHsXe7tJ2g5KUbQ75N+4bG7B+X1eIu3YmStdr7m" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <style>
        /* Custom Styles */
        .welcome-container {
            margin-top: 80px;
        }

        .message {
            background-color: #f8d7da;
            padding: 15px;
            border-radius: 5px;
            color: #721c24;
        }

        .form-link {
            margin-top: 20px;
        }

        .logout-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #f1f1f1;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <a href="{{route('welcome')}}"><img src="{{asset('images/logo-white.png')}}" alt="Logo"
                    style="width: 50px; height: auto;"></a>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('login')}}">Profil</a></li>
                <li><a href="{{route('register')}}">Pesanan</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><button type="submit" class="logout-button">Logout</button></li>
                </form>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <!-- <div class="container welcome-container">
        @if(Auth::check())
            <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>

            <div class="message">
                @if (!Auth::user()->hasVerifiedEmail())
                    <p>Email Anda belum terverifikasi. Segera periksa email Anda dan lakukan verifikasi untuk melanjutkan
                        penggunaan platform.</p>
                    <a href="{{ route('verification.notice') }}" class="btn btn-warning">Kirim ulang link verifikasi</a>
                @else
                    <p>Email Anda telah terverifikasi. Selamat menikmati layanan kami!</p>
                @endif
            </div>

            <div class="form-link">
                <p>Jika Anda ingin keluar, klik tombol di bawah ini:</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </div>
        @else
            <p>Anda belum login. <a href="{{ route('login') }}">Login di sini</a></p>
        @endif
    </div> -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 My Platform. All rights reserved.</p>
            <p><a href="/terms" class="text-dark">Terms of Service</a> | <a href="/privacy" class="text-dark">Privacy
                    Policy</a></p>
        </div>
    </footer>

    <!-- Link ke Bootstrap JS dan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybR1sV9gF7iG3fF3pK5Y7aXjxw3v/Sc5t9Me64FQ+IpxbZ0tM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-c6z5t9l0Cvfoz7O0Ll4US7yJ9wVmAszJSSTuD7jjk+04F1L6d00j3z5JfA1eq/e"
        crossorigin="anonymous"></script>
</body>

</html>