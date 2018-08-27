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
            
            <div class="main-panel">

               
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
