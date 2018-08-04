<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basmalah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif


            <div class="content">

              <font color="black"><b>@include('flash::message')</b></font>

                <div class="title m-b-md">
                    Basmalah
                </div>

                <div class="links">
                    <a href="{{ url('/dkms/create')}}">Pendaftaran Dewan Kemakmuran Masjid</a>
                    <a href="{{ url('/pengajars/create')}}">Pendaftaran Pengajar</a>
                    <br><br>
                    <a href="{!! route('dkms.index') !!}"><i class="fa fa-edit" class="{{ Request::is('dkms*') ? 'active' : '' }}"></i><span>Data Dewan Kemakmuran Masjid</span></a>
                    <a href="{{ url('/pengajars') }}">Data Pengajar</a>
                    <br><br>
                    <a href="{{ url('/donasis/create')}}">Donasi</a>
                    <br><br>
                    <a href="{{ url('/laporans/create')}}">Laporan</a>
                </div>
            </div>
        </div>
    </body>
</html>
