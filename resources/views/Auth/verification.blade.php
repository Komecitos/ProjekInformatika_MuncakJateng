<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset(path: "images/muncak.png") }}" type="image/x-icon">
    <title>ConfirmsPasswords</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJv3pN4v2hf3swg9v7qNYyHsXe7tJ2g5KUbQ75N+4bG7B+X1eIu3YmStdr7m" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center"
        style="background-color: #f8f9fa;">

        @if(Auth::check())
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; background-color: #ffffff;">
            <div class="card-body">
                <h1 class="text-center mb-4">Selamat Datang, {{ Auth::user()->name }}!</h1>

                <div class="message mb-3">
                    @if (!Auth::user()->hasVerifiedEmail())
                    <p class="alert alert-warning">Email Anda belum terverifikasi. Segera periksa email Anda dan lakukan
                        verifikasi untuk melanjutkan penggunaan platform.</p>
                    <a href="{{ route('verification.notice') }}" class="btn btn-warning w-100">Kirim ulang link
                        verifikasi</a>
                    @else
                    <p class="alert alert-success">Email Anda telah terverifikasi. Selamat menikmati layanan kami!</p>
                    @endif
                </div>

                <div class="form-link">
                    <p class="mb-3">Jika Anda ingin keluar, klik tombol di bawah ini:</p>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%; background-color: #ffffff;">
            <div class="card-body">
                <h2 class="text-center mb-4">Anda belum login</h2>
                <p class="text-center">Silakan login untuk melanjutkan. <a href="{{ route('login') }}"
                        class="btn btn-primary w-100">Login di sini</a></p>
            </div>
        </div>
        @endif

    </div>

    <!-- Link ke Bootstrap JS dan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybR1sV9gF7iG3fF3pK5Y7aXjxw3v/Sc5t9Me64FQ+IpxbZ0tM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-c6z5t9l0Cvfoz7O0Ll4US7yJ9wVmAszJSSTuD7jjk+04F1L6d00j3z5JfA1eq/e"
        crossorigin="anonymous"></script>
</body>

</html>