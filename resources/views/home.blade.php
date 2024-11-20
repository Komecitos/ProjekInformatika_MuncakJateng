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
</head>

<body style="background-image: url('{{ asset("images/") }}');">
    <!-- Header Section -->
    <header>
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/muncak.png') }}" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('login')}}">Profil</a></li>
                <li><a href="{{route('register')}}">Pesanan</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <!-- <li><button type="submit" class="logout-button">Logout</button></li> -->
                </form>
            </ul>
        </nav>
    </header>

    <section>
        <div class="container">
            <h1>Home</h1>
        </div>
    </section>

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