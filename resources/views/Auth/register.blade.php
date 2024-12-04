<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register</title>
    <link rel="shortcut icon" href="{{ asset(path: "images/muncak.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>

<body style="background-image: url('{{ asset(path: "images/mounts/merbabu2.jpg") }}'); background-size: cover;  background-repeat: no-repeat;">
    <nav class=" navbar navbar-expand-md navbar-light sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz sticky-top" style="">
        <div class="container">
            <a href="{{ route('welcome') }}"><img src="{{ asset(path: "images/muncak.png") }}" alt="logo" style="height: 40px; width: auto;"></a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-primary"> <a class="nav-link text-primary" href="{{ route('register') }}">Daftar</a> </li>
                    <li class="nav-item text-primary"> <a class="nav-link text-primary" href="#">Panduan</a> </li>
                    <li class="nav-item"> <a class="nav-link text-primary" href="#">About</a> </li>
                    <a class="btn navbar-btn ml-md-2 btn-primary text-light" href="{{ route('login') }}">Masuk</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-3 text-center">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-5 col-10 rounded border p-4 " style="background: rgba(255,255,255,0.2);
                    backdrop-filter: blur(16px);
                    -webkit-backdrop-filter: blur(16px);
                    border: 1px solid rgba(255,255,255,0.18);
                    box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
                    border-radius: 10px;
                    border: 1px solid rgba(255,255,255,0.18);">
                    <img class="img-fluid d-block img-thumbnail w-25 mt-0 mx-auto" src="{{ asset(path: "images/muncak.png") }}">
                    <h3 class="display-4 text-primary"><b>Sign In</b></h3>

                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Username" style="" required="required" id="name" name="name" required
                                value="{{ old('name') }}" autocomplete="off"> </div>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Email" style="" required="required" id="email" name="email" required
                                value="{{ old('email') }}" autocomplete="off"> </div>
                        <div>
                            @if ($errors->has('register') || $errors->has('password') || $errors->has('email'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'failed...',
                                        width: '300px',
                                        heigth: '200px',
                                        html: `
                            @if ($errors->has('login'))
                            <p>{{ $errors->first('login') }}</p>
                            @endif
                            @if ($errors->has('password'))
                            <p>{{ $errors->first('password') }}</p>
                            @endif
                            @if ($errors->has('email'))
                            <p>{{ $errors->first('email') }}</p>
                            @endif
                            `,
                                    });
                                });
                            </script>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" class="form-control mb-2" placeholder="Password" id="password" name="password" required="required">
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" id="password_confirmation" name="password_confirmation" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary"><b style="">Masuk</b></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>