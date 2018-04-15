@extends('layouts.app')

@section('content')
@foreach ($banner as $dt)
<div class="baner" style="background-image: url('{{ asset('img/banner/'.$dt->image) }}');">
    <div class="cover"></div>
    <div class="baner-title">
        @foreach ($ttl as $dt)
        <div class="main-title">{{ $dt->title }}</div>
        <div class="sub-title">{{ $dt->subtitle }}</div>
        @endforeach
    </div>
</div>
@endforeach
<div class="col-full">
    <div class="pad-20px">
        <div class="block">
            @foreach ($info as $dt)
            <div class="frame-info">
                <div class="top pad-20px">
                    <h2>{{ $dt->title }}</h2>
                </div>
                <div class="desc col-900px">
                    {{ $dt->descr }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="block-home pad-20px">
        <div class="top pad-20px">
            <h2>Our Events</h2>
        </div>
        <div class="block-4px">
            @for ($i=1; $i<=4; $i++)
            <div class="frame-info">
                <div class="icn">
                    <span class="fas fa-lg fa-map-marker-alt"></span>
                </div>
                <div class="top">
                    <h2>Title</h2>
                </div>
                <div class="desc">
                    Maka property tersebut hanya bisa diakses oleh satu goroutine saja.
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="block-home">
        <div class="top">
            <h2 class="pad-20px">Galeries</h2>
        </div>
        <div class="block-4px">
            @for ($i=1; $i<=4; $i++)
            <div class="frame-galery">
                <div class="content">
                    @for ($j=1; $j<=4; $j++)
                        <div class="cov" style="background-image: url('{{ asset('images/bk.jpg') }}');"></div>
                    @endfor
                </div>
                <div class="desc">
                    Album of descriptions
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="block-home pad-20px">
        <div class="top pad-20px">
            <h2>Call Us</h2>
        </div>
        <div class="block-3px">
            @for ($i=1; $i<=3; $i++)
                <div class="frame-info">
                    <div class="icn">
                        <span class="fas fa-lg fa-phone"></span>
                    </div>
                    <div class="top">
                        <h2>0895434xxx</h2>
                    </div>
                    <div class="desc">
                        Name of Admin
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="block-home pad-20px">
        <div class="top pad-20px">
            <h2>Email</h2>
        </div>
        <div class="block-2px">
            @for ($i=1; $i<=2; $i++)
                <div class="frame-info">
                    <div class="icn">
                        <span class="far fa-lg fa-envelope"></span>
                    </div>
                    <div class="top">
                        <h2>admin@gmail.com</h2>
                    </div>
                    <div class="desc">
                        Admin
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="block-home">
        <div class="top pad-20px">
            <h2>Find Us</h2>
        </div>
        <div class="block-4px">
            <div class="frame-info">
                <div class="icn">
                    <span class="fab fa-lg fa-instagram"></span>
                </div>
                <div class="desc">
                    Instagram
                </div>
            </div>
            <div class="frame-info">
                <div class="icn">
                    <span class="fab fa-lg fa-facebook"></span>
                </div>
                <div class="desc">
                    Facebook
                </div>
            </div>
            <div class="frame-info">
                <div class="icn">
                    <span class="fab fa-lg fa-twitter"></span>
                </div>
                <div class="desc">
                    Twitter
                </div>
            </div>
            <div class="frame-info">
                <div class="icn">
                    <span class="fab fa-lg fa-google-plus"></span>
                </div>
                <div class="desc">
                    Google Plus
                </div>
            </div>
        </div>
    </div>
    <div class="block-home">
        <div class="top">
            <h2 class="pad-20px">Articles</h2>
        </div>
        <div class="block-3px">
            @for ($i=1; $i<=3; $i++)
            <div class="frame-post">
                <div class="cov" style="background-image: url('{{ asset('images/bk.jpg') }}');"></div>
                <div class="min">
                    <div class="pos ttl"><h3>Title will be in here so you should put your title in here</h3></div>
                    <div class="bot">
                        Maka property tersebut hanya bisa diakses oleh satu goroutine saja. Maka property tersebut hanya bisa diakses oleh satu goroutine saja.
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="block-home">
        <div class="top">
            <h2 class="pad-20px">Instagram Posts</h2>
        </div>
        <div class="block-4px">
            @for ($i=1; $i<=4; $i++)
            <div class="frame-insta">
                <div class="cov">
                    <img src="{{ asset('images/bk.jpg') }}" alt="Logo">
                </div>
                <div class="min">
                    <div class="pos bot">
                        Maka property tersebut hanya bisa diakses oleh satu goroutine saja. Maka property tersebut hanya bisa diakses oleh satu goroutine saja.
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="block-home pad-20px">
        <div class="top pad-20px">
            <h2>Testimonial</h2>
        </div>
        <div class="block-3px">
            @for ($i=1; $i<=3; $i++)
                <div class="frame-info">
                    <div class="icn">
                        <span class="far fa-lg fa-user"></span>
                    </div>
                    <div class="top">
                        <h2>User Name</h2>
                    </div>
                    <div class="desc">
                        "Maka property tersebut hanya bisa diakses oleh satu goroutine saja."
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="pad-20px"></div>
</div>
@endsection
