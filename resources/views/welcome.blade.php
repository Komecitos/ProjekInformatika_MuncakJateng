<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}"></script>

</head>

<body style="background-image: url('{{ asset("images/wp1.png") }}');">
    <!-- Header Section -->
    <header>
        <div class="logo">
            <a href="{{route('welcome')}}"><img src="{{asset('images/logo-white.png')}}" alt="Logo"
                    style="width: 50px; height: auto;"></a>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Registrasi</a></li>
                <li><a href="#guide">Panduan</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container1">
            <div class="welcome">
                <h1>Muncak jateng</h1>
                <p style="margin-top: 20px; font-weight: 400;">Selamat datang di platform pendakian kami! Siapkan
                    dirimu untuk
                    mendaki gunung-gunung indah di Jawa Tengah. Temukan
                    informasi, pesan tiket, dan nikmati pengalaman luar biasa di alam terbuka!</p>
                <a href="{{route('login')}}"><button type="button" class="button">Masuk</button></a>

            </div>
            <div class="carousel-container">
                <button class="carousel-btn prev-btn">❮</button>
                <div class="carousel">
                    <div class="carousel-item">
                        <img src="{{asset('images/mounts/Gunung Bismo.jpg')}}" alt="" class="carousel-img">
                        <h3 style="font-weight: 200; font-size: 20px;">Gunung Bismo <br>
                            2000 mdpl</h3>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/mounts/Gunung Prau.jpg')}}" alt="" class="carousel-img">
                        <h3 style="font-weight: 200; font-size: 20px;">Gunung Prau <br>
                            2000 mdpl</h3>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/mounts/Gunung Slamet.jpg')}}" alt="" class="carousel-img">
                        <h3 style="font-weight: 200; font-size: 20px;">Gunung Slamet <br>
                            2000 mdpl</h3>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/mounts/Gunung Sumbing.jpg')}}" alt="" class="carousel-img">
                        <h3 style="font-weight: 200; font-size: 20px;">Gunung Sumbing <br>
                            2000 mdpl</h3>
                    </div>

                </div>
                <button class="carousel-btn next-btn">❯</button>
            </div>
        </div>
        <div class="container2">
            <h1>About US</h1>
        </div>

    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; Muncak Jateng</p>
    </footer>
</body>

</html>