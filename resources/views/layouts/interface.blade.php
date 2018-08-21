<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Car portal template</title>
    <meta name="description" content="Car portal project devoloped in Laravel">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Bootstrap , Font Awesome , Custom css -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css" />

    @yield('custom_css')


    <!-- Fonts -->
    <link rel="stylesheet" href="{!! url('https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,500,700')!!}">
    <link rel="stylesheet" href="{!! url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Raleway:300,400,700')!!}">

    <!-- Sass -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />





</head>

<body>


<!--    Navigation  -->
<nav class="navbar navbar-expand-md fixed-top navbar-no-bg" id="nav">
    <div class="container">
        <a href="#" class="navbar-brand"></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="//codeply.com">Buy a car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sell a car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rewievs</a>
                </li>
                <li>
                    @if (Route::has('login'))
                        @auth
                        @if(Auth::user()->role->name == 'user')

                            <a class="btn btn-link-4" href="/user">Go to dashboard</a>

                        @elseif((Auth::user()->role->name == 'author'))

                            <a class="btn btn-link-4" href="/author">Go to dashboard</a>

                        @else
                            <a class="btn btn-link-4" href="/admin">Go to dashboard</a>
                        @endif

                    @else
                        <a class="btn btn-link-4" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-link-3" href="{{ route('register') }}">Register</a>

                        @endauth
                    @endif




                </li>

            </ul>
        </div>
    </div>
</nav>



<div id="main">
    @yield('main_content')

</div>
<!-- END main -->



<!-- Footer  -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="/img/logo2.png" alt="">
            </div>
            <div class="col-sm-3">
                <div class="footer-title mb-4">Most popular on the site</div>
                <div class="popular">
                    <ul>
                        <li><i class="fa fa-caret-right"></i> Ford Mondeo</li>
                        <li><i class="fa fa-caret-right"></i> Volkswagen Golf 4</li>
                        <li><i class="fa fa-caret-right"></i> Chevrolet Camaro</li>
                        <li><i class="fa fa-caret-right"></i> Audi A4
                        <li><i class="fa fa-caret-right"></i> BMW X5</li>
                        <li><i class="fa fa-caret-right"></i> Fiat 500</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-title mb-4">Our partners</div>
                <div class="popular">
                    <ul>
                        <li><i class="fa fa-caret-right"></i> novelwebdesign.com</li>
                        <li><i class="fa fa-caret-right"></i> bioeliksir.com</li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-title mb-4">Follow us</div>
                <div class="mb-4">
                    <a role="button" href="#" class="btn btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a role="button" href="#" class="btn btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a role="button" href="#" class="btn btn-instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a role="button" href="#" class="btn btn-linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a role="button" href="#" class="btn btn-googleplus">
                        <i class="fa fa-google-plus-official"></i>
                    </a>
                </div>

                <div class="footer-title mb-2">Facebook page</div>

                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=1178869015564110&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-like" data-href="https://www.facebook.com/ordinacija.bioeliksir/" data-width="200" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true" data-colorscheme="dark"></div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">

        © Copyright 2018 Car Portal Developed By
        <a href="#">Novel Web Design</a>
    </div>

</div>




<script src="{{asset('js/all.js')}}"></script>


@yield('scripts')



@yield('scripts_data')

</body>
</html>