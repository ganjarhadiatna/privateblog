@extends('admin.layouts.app')

@section('content')
<script type="text/javascript">
	function postLogo() {
		var fd = new FormData();
		var image = $('#logo')[0].files[0];
		
		fd.append('image', image);
		$.each($('#form-image-logo').serializeArray(), function(a, b) {
	    	fd.append(b.name, b.value);
	    });
	    $.ajax({
	    	url: '{{ url("/setting/logo/save") }}',
			data: fd,
			processData: false,
			contentType: false,
			type: 'post',
			beforeSend: function() {
				//$('#progressbar').show();
				$('#btn-logo').val('Mengirim Gambar');
			}
	    })
	    .done(function(data) {
	    	if (data == "success") {
	    		$('#btn-logo').val('Berhasil Dikirim');
	    		alert('Gambar berhasil disimpan.');
	    		window.location = '{{ url("/setting/logo") }}';
	    	} else {
	    		alert('Pengiriman gambar gagal, mohon ulangi kembali.');
	    		$('#btn-logo').val('Ulangi Kembali');
	    	}
	    })
	    .fail(function(data) {
	    	alert('Terjadi kesalahan, mohon ulangi kembali.');
	    	$('#btn-logo').val('Ulangi Kembali');
	    });
	}
	function postBanner() {
		var fd = new FormData();
		var image = $('#banner')[0].files[0];
		
		fd.append('image', image);
		$.each($('#form-image-banner').serializeArray(), function(a, b) {
	    	fd.append(b.name, b.value);
	    });
	    $.ajax({
	    	url: '{{ url("/setting/banner/save") }}',
			data: fd,
			processData: false,
			contentType: false,
			type: 'post',
			beforeSend: function() {
				//$('#progressbar').show();
				$('#btn-banner').val('Mengirim Banner');
			}
	    })
	    .done(function(data) {
	    	if (data == "success") {
	    		$('#btn-banner').val('Berhasil Dikirim');
	    		alert('Banner berhasil disimpan.');
	    		window.location = '{{ url("/setting/logo") }}';
	    	} else {
	    		alert('Pengiriman banner gagal, mohon ulangi kembali.');
	    		$('#btn-banner').val('Ulangi Kembali');
	    	}
	    })
	    .fail(function(data) {
	    	alert('Terjadi kesalahan, mohon ulangi kembali.');
	    	$('#btn-banner').val('Ulangi Kembali');
	    });
	}
</script>
<div class="header">
	<div class="header-mn">
		<div class="header-pl">
			<div class="hd-pl-left">
				<h1><a href="{{ url('/setting/logo') }}">Logo & Banner</a></h1>
			</div>
			<div class="hd-pl-right"></div>
		</div>
	</div>
</div>
<div class="frame-home">
	<div class="grid grid-2x">
		<div class="grid-1">
			<form method="post" enctype="multipart/form-data" id="form-image-logo" action="javascript:void(0)" onsubmit="postLogo()">
				<div class="form-field theme-1">
					<div class="block pad-bottom-10px">
						<div class="ttl">Logo</div>
					</div>
					<div class="block pad-bottom-15px">
						<input type="file" name="logo" class="" id="logo" required="true">
					</div>
					<input type="submit" name="save" class="btn btn-main-color btn-focus txt-small" id="btn-logo" value="Simpan Logo">
				</div>
			</form>
			<form method="post" enctype="multipart/form-data" id="form-image-banner" action="javascript:void(0)" onsubmit="postBanner()">
				<div class="form-field theme-1">
					<div class="block pad-bottom-10px">
						<div class="ttl">Banner</div>
					</div>
					<div class="block pad-bottom-15px">
						<input type="file" name="banner" class="" id="banner" required="true">
					</div>
					<input type="submit" name="save" class="btn btn-main-color btn-focus txt-small" id="btn-banner" value="Simpan Banner">
				</div>
			</form>
		</div>
		<div class="grid-2">
			<div class="form-field theme-1">
				<div class="block">
					<div class="desc">
						<p>
							- Untuk merubah logo atau banner cukup dengan mengupload gambar terbaru.
						</p>
						<br>
						<p>
							- Logo dan banner akan secara otomatis dirubah oleh sistem.
						</p>
						<br>
						<p>
							- Sistem akan melakukan pencatatan bagi Admin yang melakukan perubahan Logo dan Banner.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection