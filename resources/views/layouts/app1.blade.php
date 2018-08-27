<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/black-dashboard.min.css?v=1.0.0') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="wrapper ">
            <!-- Start Sidebar -->
            <div class="sidebar" data-color="purple" data-background-color="white">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
                Tip 2: you can also add an image using data-image tag -->
                <div class="logo">
                    <a href="/" class="simple-text logo-mini">
                        DP
                    </a>
                
                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                        Laragram
                    </a>
                </div>
                
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item active  ">
                            <a class="nav-link" href="#0">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                
                        <!-- your sidebar here -->
                    </ul>
                </div>
            </div>
            <!-- End Sidebar -->

            <div class="main-panel">

                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-transparent">
                    {{-- Left side --}}
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Laragram <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    {{-- Center side --}}
                    <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                        <form class="form-inline ml-auto">
                            <div class="form-group no-border">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-link btn-icon btn-round">
                                <i class="tim-icons icon-zoom-split"></i>
                            </button>
                        </form>
                    </ul>
                    {{-- Right side --}}
                    <div class="navbar-nav ml-auto mt-2 mt-lg-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </nav>
                <!-- End Navbar -->
                


                <div class="content">
                    <div class="container-fluid">
                        <!-- your content here -->
                        <main class="py-4">
                                @yield('content')
                            </main>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
        
   



    <!--   Core JS Files   -->
    {{-- creo que es jquery --}}
    <script src="{{ asset('js/app.js') }}" defer></script> 
    
    <script src="{{ asset('js/core/popper.min.js') }}" defer></script> 
    <script src="{{ asset('js/core/bootstrap.min.js') }}" defer></script> 
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script> 
    

    <!-- Chartist JS -->
    <script src="{{ asset('js/plugins/chartjs.min.js') }}" defer></script> 
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}" defer></script> 
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/black-dashboard.js?') }}" defer></script> 



</body>
</html>
