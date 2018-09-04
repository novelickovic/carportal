<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Car portal template</title>
    <meta name="description" content="Car portal project devoloped in Laravel">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/favicon.ico')}}" type="image/x-icon">

    <!-- Bootstrap , Font Awesome , Custom css -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css" />

    <!-- Sass -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />


    @yield('custom_css')


</head>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="{{url("/admin")}}" class="logo"><img alt="Logo" src="/img/logo.png" /> </a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">
                <DIV class="list-inline-item text-white"><h5>Hello, {{Auth::user()->name}}</h5></DIV>
                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                        @if(Auth::user()->photo)

                            <img src="{{Auth::user()->photo->name}}" alt="Profile image" class="avatar-rounded">
                            @else

                            <img src="/img/avatars/admin.jpg" alt="Profile image" class="avatar-rounded">
                        @endif
                    </a>

                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->
                        <a href="{{route('users.edit',Auth::user()->id)}}" class="dropdown-item notify-item">
                            <i class="fa fa-user"></i> <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </li>
            </ul>

        </nav>

    </div>
    <!-- End Navigation -->


    <!-- Left Sidebar -->
    <div class="left main-sidebar">

        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">

                <ul>

                    <li class="submenu">
                        <a href="/admin"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="{{route('users.index')}}"><i class="fa fa-fw fa-users"></i> <span> Users </span> </a>

                    </li>
                    <li class="submenu">
                        <a href="{{route('categories.index')}}"><i class="fa fa-fw fa-list-alt"></i> <span> Categories </span> </a>

                    </li>
                    <li class="submenu">
                        <a href="{{route('posts.index')}}"><i class="fa fa-fw fa-file-text-o"></i> <span> Posts </span> </a>

                    </li>
                    <li class="submenu">
                        <a href="{{route('media.index')}}"><i class="fa fa-fw fa-image"></i> <span> Media </span> </a>

                    </li>
                    <li class="submenu">
                        <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>

                <div class="clearfix"></div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>
    <!-- End Sidebar -->

    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">



                @yield('content')

            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>    <!-- END content-page -->

    <footer class="footer">
		<span class="text-right">
		© Copyright 2018 Car Portal Developed By
        <a href="http://www.novelwebdesign.com">Novel Web Design</a>
		</span>
        <span class="float-right">
		Dashboard by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
    </footer>

</div>
<!-- END main -->

<script src="{{asset('js/all.js')}}"></script>

@yield('scripts')

<script src="{{asset('js/admin.js')}}"></script>

@yield('scripts_data')

</body>
</html>