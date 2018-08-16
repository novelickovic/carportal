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
    <link href="{{asset('css/custom-front.css')}}" rel="stylesheet" type="text/css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="{!! url('https://fonts.googleapis.com/css?family=Josefin+Sans:300,400')!!}">
    <link rel="stylesheet" href="{!! url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Raleway:300,400,700')!!}">

    <!-- Sass -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />


    @yield('custom_css')


</head>

<body>

<div id="main">
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



    <!--    Top Content     -->
    <div class="top-content">
       <div class="container">
           <div class="box">

               <div class="card">
                   <h3 class="mb-2">Looking for a car?</h3>
                   {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   {!! Form::label('status', 'Select car make') !!}<br>
                                   {!! Form::select('status',['0'=>'Choose','1'=>'Audi', '2'=>'BMW','3'=>'Mercedes'], null, ['class'=>'form-control']) !!}
                               </div>
                           </div>

                           <div class="col-md-4">
                               <div class="form-group">
                                   {!! Form::label('status', 'Select car model') !!}<br>
                                   {!! Form::select('status',['0'=>'Choose','1'=>'Some model 1', '2'=>'Some model 2'], null, ['class'=>'form-control']) !!}
                               </div>
                           </div>

                           <div class="col-md-4">
                               <div class="form-group">
                                   {!! Form::label('status', 'Select year') !!}<br>
                                   {!! Form::select('status',['0'=>'Choose','1'=>'2000', '2'=>'2001)'], null, ['class'=>'form-control']) !!}
                               </div>
                           </div>
                           <div class="col-md-4"></div>
                           <div class="col-md-4">
                               {!! Form::submit('Search', ['class'=>'btn btn-block btn-danger']) !!}
                           </div>
                           <div class="col-md-4 align-self-end"><div class="adv-search"><a href="#">ADVANCED SEARCH</a></div></div>
                       </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>

    <!--   Features     -->
    <div class="features-box">
        <div class="container">
            <h3>Used cars by make</h3>
        </div>
    </div>



    <div class="features-box-red">
        <div class="container">
            <h3>News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque varius morbi enim nunc faucibus a pellentesque. Porta lorem mollis aliquam ut porttitor. Vulputate sapien nec sagittis aliquam malesuada bibendum. Ut eu sem integer vitae justo eget magna fermentum. Et odio pellentesque diam volutpat commodo sed egestas egestas fringilla. Lacus vel facilisis volutpat est velit. Tellus pellentesque eu tincidunt tortor aliquam nulla. Tincidunt praesent semper feugiat nibh. At auctor urna nunc id. Viverra aliquet eget sit amet tellus cras adipiscing enim eu. Nisl rhoncus mattis rhoncus urna neque viverra justo nec. Ut tellus elementum sagittis vitae et leo duis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi. A</p>
        </div>
    </div>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
<!-- END main -->

<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/custom-front-js.js')}}"></script>

@yield('scripts')



@yield('scripts_data')

</body>
</html>