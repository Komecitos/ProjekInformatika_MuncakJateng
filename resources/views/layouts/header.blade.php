<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset(path: "images/muncak.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset(path: 'css/theme.css') }}">
</head>
<style>
</style>

<body>
    <nav class="navbar navbar-expand-md bg-white fixed-top  ">
        <div class="container"> <a class="" href="{{ route(name: 'home') }}">
                <img src="{{ asset(path: 'images/muncak.png ') }}" alt="" style="width: 50px; height: auto;">
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style=""> <a class="nav-link" href="{{route(name: 'ticket.index')}}"><b style="" class=""><span
                                    style="font-weight: normal;">Tiket</span></b></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#"><b class=""><span
                                    style="font-weight: normal;">Pesanan</span></b></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route(name: 'about') }}"><b class=""><span
                                    style="font-weight: normal;">Tentang</span></b></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#"><b class=""><span
                                    style="font-weight: normal;">Profil</span></b></a> </li>
                    <form action="{{ route('logout') }}" method="POST" style="font-weight: normal; color: white">
                        @csrf
                        <button type="submit" class="btn btn-link bg-primary" style="color: white; margin-left: 10px">Keluar</button>
                    </form>
                </ul>

            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{ asset(path: 'js/headbar.js') }}"></script>
</body>

</html>