<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>

<body>

    <!-- Error Modal -->
    <div id="errorModal" style="display: none;">
        <div class="modal-content">
            <span id="closeModal">&times;</span>
            <ul id="errorMessages"></ul>
        </div>
    </div>

    <div class="main">

        <section class="signup">
            <!-- <img src="{{asset('images/wp1.png')}}" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{route('register')}}" class="signup-form">
                        @csrf
                        <h2 class="form-title" style="font-family: 'Roboto';">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"
                                value="{{ old('name') }}" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                value="{{ old('email') }}" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation"
                                id="password_confirmation" placeholder="Repeat your password" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{route('login')}}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script>

    </script>

    <script src="{{asset('/jquery.min.js')}}"></script>
    <script src="{{asset('js/register.js')}}"></script>
</body>

</html>