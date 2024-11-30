<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Merbabu</title>
    <!-- <link rel="icon" type="png" href="WelcomeLogo.png"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mounts/gunung.css') }}">
</head>

<body>
    @include ('layouts.header')
    <section class="hero" id="main4">
        <div class="mount-container">
            <h2 class="center">Gunung Prau</h2>
            <h3 class="">lihat cuaca terkini</h3>
            <a href="">
                <div style="display: flex; flex-direction: rows; justify-content: space-around; padding-right: 50px; ">
                    <a href="{{ route('openWeather', ['latitude' => -7.1956, 'longitude' => 109.9128, 
                    'location' => 'Krajan, Dieng Kulon, Banjarnegara, Jawa Tengah']) }}">
                        <h3>Dieng Wetan</h3>
                    </a><a href="
                    {{ route('openWeather', ['latitude' => -7.209563, 'longitude' => 109.925438, 
                    'location' => 'Patakbanteng, Wonosobo, Jawa Tengah, Indonesia']) }}
                    ">
                        <h3>Patakbanteng</h3>
                    </a><a href="">
                        <h3>Kalilembu</h3>
                    </a>
                </div>
            </a>
        </div>

    </section>

</body>

</html>