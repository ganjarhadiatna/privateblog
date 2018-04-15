<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Great</title>

    <!-- Styles -->
    <link href="{{ asset('css/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/assets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/body.css') }}" rel="stylesheet">

    <!--Java Script-->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
    <div class="header">
        <div class="header-pos header-pos-fixed">
            <div class="header-place col-full">
                <div class="rig">
                    @foreach ($logo as $dt)
                        <a href="{{ url('') }}">
                            <img class="logo" src="{{ asset('img/logo/'.$dt->image) }}" alt="logo">
                        </a>
                    @endforeach
                    <div class="menu-normal">
                        <ul>
                            <a href="{{ url('/') }}"><li class="ttl">Home</li></a>
                            <a href="#"><li class="ttl">About</li></a>
                            <a href="#"><li class="ttl">Events</li></a>
                            <a href="#"><li class="ttl">Galeries</li></a>
                            <a href="#"><li class="ttl">Articles</li></a>
                            <a href="#"><li class="ttl">Instagram</li></a>
                            <a href="#"><li class="ttl">Contact</li></a>
                        </ul>
                    </div>
                </div>
                <div class="mid">
                    <div class="menu-normal">
                        <ul>
                            <li class="icn">
                                <span class="fab fa-lg fa-instagram"></span>
                            </li>
                            <li class="icn">
                                <span class="fab fa-lg fa-facebook"></span>
                            </li>
                            <li class="icn">
                                <span class="fab fa-lg fa-twitter"></span>
                            </li>
                            <li class="icn">
                                <span class="fab fa-lg fa-google-plus"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        @yield('content')
    </div>
    <div class="footer">
        <div class="col-full">
            <div class="left">
                @foreach ($logo as $dt)
                <label class="logo">
                    <a href="{{ url('') }}">
                        <img src="{{ asset('img/logo/'.$dt->image) }}" alt="logo">
                    </a>
                </label>
                @endforeach
                <p>
                <label class="fa fa-lg fa-copyright"></label>
                <label class="title">TamuKota.com All Right Reserved.</label>
                TamuKota.com adalah situs yang memungkinkan pengunjung untuk mencari tempat destinasi Wisata, Kuliner, Penginapan, Belanja, Souvenir, Traveling, Hunting dll. TamuKota.com bukanlah tempat untuk membuat Pemesanan ke suatu Intansi.</p>
            </div>

            <div class="right">
                <div class="find">
                    <h3>Find Us</h3>
                    <ul>
                        <a href="#">
                            <li>
                                <div class="fab fa-lg fa-facebook"></div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <div class="fab fa-lg fa-twitter"></div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <div class="fab fa-lg fa-google"></div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <div class="fab fa-lg fa-instagram"></div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <div class="fab fa-lg fa-pinterest"></div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <div class="fa fa-lg fa-envelope"></div>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <div class="fa fa-lg fa-phone"></div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="mid">
                <div class="menu">
                    <h3>Info</h3>
                    <ul>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contacts</a>
                        </li>
                        <li>
                            <a href="#">Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">Jobs</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
