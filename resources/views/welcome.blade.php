<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/black-dashboard.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="sidebar">
                    <!--
                      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
                  -->
                    <div class="sidebar-wrapper">
                      <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                          CT
                        </a>
                        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                          Creative Tim
                        </a>
                      </div>
                      <ul class="nav">
                        <li class="active ">
                          <a href="./dashboard.html">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                          </a>
                        </li>
                        <li>
                          <a href="./icons.html">
                            <i class="tim-icons icon-atom"></i>
                            <p>Icons</p>
                          </a>
                        </li>
                        <li>
                          <a href="./map.html">
                            <i class="tim-icons icon-pin"></i>
                            <p>Maps</p>
                          </a>
                        </li>
                        <li>
                          <a href="./notifications.html">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Notifications</p>
                          </a>
                        </li>
                        <li>
                          <a href="./user.html">
                            <i class="tim-icons icon-single-02"></i>
                            <p>User Profile</p>
                          </a>
                        </li>
                        <li>
                          <a href="./tables.html">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>Table List</p>
                          </a>
                        </li>
                        <li>
                          <a href="./typography.html">
                            <i class="tim-icons icon-align-center"></i>
                            <p>Typography</p>
                          </a>
                        </li>
                        <li>
                          <a href="./rtl.html">
                            <i class="tim-icons icon-world"></i>
                            <p>RTL Support</p>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
