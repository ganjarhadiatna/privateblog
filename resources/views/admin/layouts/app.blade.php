<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Styles -->
    <link href="{{ asset('css/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/assets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!--Java Script-->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript">
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body>
    <div class="body body-grid-2x">
        <div class="side">
            <div class="menu-side">
                <ul>
                    <div class="hd-pl-left pad-20px">
                        <a href="{{ url('/dashboard') }}">
                            <h2 class="main-ttl">{{ Auth::user()->name }}</h2>
                        </a>
                    </div>
                    <p class="ttl">Menu Utama</p>
                    <a href="{{ url('/dashboard') }}">
                        <li>
                            <span class="icn fas fa-lg fa-home"></span>
                            Dashboard
                        </li>
                    </a>

                    <p class="ttl">Pengelolaan</p>
                    <a href="#">
                        <li>
                            <span class="icn fa fa-lg fa-edit"></span>
                            Artikel
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <span class="icn fa fa-lg fa-th-list"></span>
                            Event - event
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <span class="icn fa fa-lg fa-images"></span>
                            Album & Galeri
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <span class="icn fa fa-lg fa-phone"></span>
                            Email & Telpon
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <span class="icn far fa-lg fa-comments"></span>
                            Testimoni
                        </li>
                    </a>
                    <a href="{{ url('/setting/icon') }}">
                        <li>
                            <span class="icn fab fa-lg fa-fonticons"></span>
                            Ikon
                        </li>
                    </a>

                    <p class="ttl">Pengaturan</p>
                    <a href="{{ url('/setting/title') }}">
                        <li>
                            <span class="icn fa fa-lg fa-font"></span>
                            Judul & Sub-judul
                        </li>
                    </a>
                    <a href="{{ url('/setting/logo') }}">
                        <li>
                            <span class="icn fa fa-lg fa-camera"></span>
                            Logo & Banner
                        </li>
                    </a>
                    <a href="{{ url('/setting/info') }}">
                        <li>
                            <span class="icn fa fa-lg fa-info-circle"></span>
                            Informasi Situs
                        </li>
                    </a>
                    <a href="{{ url('/setting/profile') }}">
                        <li>
                            <span class="icn far fa-lg fa-user"></span>
                            Admin Profil
                        </li>
                    </a>
                    
                    <p class="ttl">Pihak Ketiga</p>
                    <a href="#">
                        <li>
                            <span class="icn fab fa-lg fa-instagram"></span>
                            Instagram
                        </li>
                    </a>

                    <p class="ttl">Lainnya</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @if (Auth::id())
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <li>
                                <span class="icn fa fa-lg fa-power-off"></span>
                                Logout
                            </li>
                        </a>
                    @endif
                </ul>
            </div>
        </div>
        <div class="main">
            @yield('content')
        </div>
    </div>
</body>
</html>
