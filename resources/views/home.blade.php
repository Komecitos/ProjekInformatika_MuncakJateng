<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset(path: "images/muncak.png") }}" type="image/x-icon">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<style>
    #main {
        display: flex;
        flex-direction: column;

        height: 100vh;
    }
</style>

<body>
    <section id="main" style="background-image: url('{{ asset(path: "images/mounts/merbabu2.jpg") }}'); background-size: cover;  background-repeat: no-repeat;">
        @include ('layouts.header')
        <section class="py-5 text-center text-white h-100 align-items-center d-flex" id="main2">
            <div class="container py-5">
                <div class="row">
                    <div class="mx-auto col-lg-8 col-md-8 offset-md-2">
                        <h3 class="display-3"><b>Muncak Jateng</b></h3>
                        <p class="lead mb-5"><b>" Pendakian adalah bentuk nyata dari menikmati proses dan mendapatkan keindahan
                                hasilnya " <i>Komecitos dev</i></b></p> <a href="#01" class="btn btn-lg btn-primary mx-0">Mulai</a> <a
                            class="btn btn-lg btn-outline-primary mx-0" href="#main4">Mendaki</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero" id="main3">
            <div class="py-5 px-0">
                <div class="container" id="main4">
                    <div class="row">
                        <div class="col-md-12" id="01">
                            <h1 class="text-center text-dark" contenteditable="true"><b>Jelajahi indahnya pegunungan Jawa Tengah</b>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center my-2"><a id="start" class="btn btn-outline-primary mb-3 btn-lg" href="{{route('ticket.index')}}">Pesan Tiket</a></div>
                    </div>
                    <div class="gallery">
                        <div class="gallery-item">
                            <img src="{{ asset('images/mounts/Gunung Bismo.jpg') }}" alt="Gunung Bismo">
                            <div class="caption">Gunung Merbabu</div>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ route('mount.show', 'prau') }}">
                                <img src="{{ asset('images/mounts/Gunung Prau.jpg') }}" alt="Gunung Prau">
                                <div class="caption">Gunung Sindoro</div>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{route('mount.show', 'slamet')}}">
                                <img src="{{ asset('images/mounts/Gunung Slamet.jpg') }}" alt="Gunung Slamet">
                                <div class="caption">Gunung Slamet</div>
                            </a>
                        </div>
                        <div class="gallery-item">
                            <img src="{{ asset('images/mounts/Gunung Sumbing.jpg') }}" alt="Gunung Sumbing">
                            <div class="caption">Gunung Sumbing</div>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ route('mount.show', 'lawu') }}">
                                <img src="{{ asset('images/mounts/lawu.jpg') }}" alt="Gunung Lawu">
                                <div class="caption">Gunung Lawu</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 px-1 pl-0 pr-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"> Quote </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <div class="py-3 bg-primary text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0">© Projek Informatika Universitas Sanata Dharma</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>