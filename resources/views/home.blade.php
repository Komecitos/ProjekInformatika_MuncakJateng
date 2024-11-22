<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link ke Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJv3pN4v2hf3swg9v7qNYyHsXe7tJ2g5KUbQ75N+4bG7B+X1eIu3YmStdr7m" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css' )}}">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/muncak.png') }}" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('login') }}">Profil</a></li>
                <li><a href="">Pesanan</a></li>
                <li><a href="{{ route('ticket') }}">Tiket</a></li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li><button type="submit" class="logout-button">Logout</button></li>
                </form>
            </ul>
        </nav>
    </header>

    <section>
        <div class="container">
            <h1>Home</h1>
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/london.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>London</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/new-york.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>New York</h4>
                                                    <p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/paris.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Paris</h4>
                                                    <p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/kuala-lumpur.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Kuala Lumpur</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/agra.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Agra</h4>
                                                    <p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/dubai.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Dubai</h4>
                                                    <p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/rio-de-janeiro.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Rio De Janeiro</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/giza.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Giza</h4>
                                                    <p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="/examples/images/cities/sydney.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>Sydney</h4>
                                                    <p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
                                                    <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybR1sV9gF7iG3fF3pK5Y7aXjxw3v/Sc5t9Me64FQ+IpxbZ0tM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-c6z5t9l0Cvfoz7O0Ll4US7yJ9wVmAszJSSTuD7jjk+04F1L6d00j3z5JfA1eq/e"
        crossorigin="anonymous"></script> -->
</body>

</html>