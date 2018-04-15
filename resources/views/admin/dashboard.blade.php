@extends('admin.layouts.app')

@section('content')
<div class="header">
	<div class="header-mn">
		<div class="header-pl">
			<div class="hd-pl-left">
				<h1><a href="{{ url('/dashboard') }}">Dashboard</a></h1>
			</div>
			<div class="hd-pl-right"></div>
		</div>
	</div>
</div>
<div class="frame-home">
	<div class="block grid-4">
		<div class="info info-size-2">
			<div class="hdr tp">
				Logo & Baner
			</div>
			<div class="hdr mid">
				<span class="fa fa-lg fa-camera"></span>
			</div>
			<a href="{{ url('/setting/logo') }}">
				<div class="hdr bot">
					Atur Pengelolaan
				</div>
			</a>
		</div>
		<div class="info info-size-4">
			<div class="hdr tp">
				Tentang Situs
			</div>
			<div class="hdr mid">
				<span class="fa fa-lg fa-info-circle"></span>
			</div>
			<a href="{{ url('/setting/info') }}">
				<div class="hdr bot">
					Atur Pengelolaan
				</div>
			</a>
		</div>
		<div class="info info-size-4">
			<div class="hdr tp">
				Ikon
			</div>
			<div class="hdr mid">
				<span class="fab fa-lg fa-fonticons"></span>
			</div>
			<a href="{{ url('/setting/icon') }}">
				<div class="hdr bot">
					Atur Pengelolaan
				</div>
			</a>
		</div>
		<div class="info info-size-2">
			<div class="hdr tp">
				Instagram
			</div>
			<div class="hdr mid">
				<span class="fab fa-lg fa-instagram"></span>
			</div>
			<a href="{{ url('/reports') }}">
				<div class="hdr bot">
					Atur Pengelolaan
				</div>
			</a>
		</div>
		<div class="info info-size-2">
			<div class="hdr tp">
				Admin Profil
			</div>
			<div class="hdr mid">
				<span class="far fa-lg fa-user"></span>
			</div>
			<a href="{{ url('/reports') }}">
				<div class="hdr bot">
					Atur Pengelolaan
				</div>
			</a>
		</div>
	</div>
	<div class="block grid-4">
		<div class="info info-size-2">
			<div class="hdr tp">
				Artikel
			</div>
			<div class="hdr mid">
				<span class="fa fa-lg fa-edit"></span>
				<span>15</span>
			</div>
			<a href="{{ url('/booking') }}">
				<div class="hdr bot">
					Lihat Daftar
				</div>
			</a>
		</div>
		<div class="info info-size-4">
			<div class="hdr tp">
				Event - event
			</div>
			<div class="hdr mid">
				<span class="fa fa-lg fa-th-list"></span>
				<span>12</span>
			</div>
			<a href="{{ url('/room/get/booking') }}">
				<div class="hdr bot">
					Lihat Daftar
				</div>
			</a>
		</div>
		<div class="info info-size-4">
			<div class="hdr tp">
				Email & Telpon
			</div>
			<div class="hdr mid">
				<span class="fa fa-lg fa-phone"></span>
				<span>0</span>
			</div>
			<a href="{{ url('/room/get/service') }}">
				<div class="hdr bot">
					Lihat Daftar
				</div>
			</a>
		</div>
		<div class="info info-size-2">
			<div class="hdr tp">
				Album & Galeri
			</div>
			<div class="hdr mid">
				<span class="fa fa-lg fa-images"></span>
				<span>150</span>
			</div>
			<a href="{{ url('/room/get/empty') }}">
				<div class="hdr bot">
					Lihat Daftar
				</div>
			</a>
		</div>
		<div class="info info-size-2">
			<div class="hdr tp">
				Testimoni
			</div>
			<div class="hdr mid">
				<span class="far fa-lg fa-comments"></span>
				<span>5</span>
			</div>
			<a href="{{ url('/room/get/used') }}">
				<div class="hdr bot">
					Lihat Daftar
				</div>
			</a>
		</div>

	</div>
</div>
@endsection