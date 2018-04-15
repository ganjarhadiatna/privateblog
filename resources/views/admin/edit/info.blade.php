@extends('admin.layouts.app')

@section('content')
<script type="text/javascript">
	function getData() {
		var id = '{{ $id }}';
		var ttl = $('#title').val();
		var descr = $('#descr').val();

		$.ajax({
			url: '{{ url("/setting/info/edit") }}',
			type: 'post',
			data: {'title': ttl, 'descr': descr, 'idsiteabout': id},
		})
		.done(function(data) {
			if (data) {
				alert('Perubahan berhasil disimpan.');
				window.location = '{{ url("/setting/info") }}';
			}
		})
		.fail(function(data) {
			alert('Gagal menyimpan perubahan, dikarenakan data masih sama seperti sebelumnya atau koneksi sedang tidak setabil.');
		});
		
		return false;
	}
</script>
<div class="header">
	<div class="header-mn">
		<div class="header-pl">
			<div class="hd-pl-left">
				<h1><a href="{{ url('/setting/info') }}">Tambah Informasi</a></h1>
			</div>
			<div class="hd-pl-right"></div>
		</div>
	</div>
</div>
<div class="frame-home">
	<form method="post" action="javascript:void(0)" onsubmit="getData()">
		<div class="grid grid-2x">
			<div class="grid-1">
			@foreach ($info as $dt)
				<div class="form-field theme-1">
					<div class="block pad-bottom-15px">
						<div class="ttl">Judul</div>
						<input type="text" name="title" class="txt txt-primary-color" placeholder="" id="title" value="{{ $dt->title }}" required="true">
					</div>
					<div class="block">
						<div class="ttl">Deskripsi</div>
						<textarea class="txt edit-text txt-full txt-primary-color" id="descr" required="true">{{ $dt->descr }}</textarea>
					</div>
				</div>
				<div class="form-field theme-1">
					<input type="submit" name="save" class="btn btn-main-color btn-focus txt-small" value="Simpan">
				</div>
			@endforeach
			</div>
			<div class="grid-2">
				<div class="form-field theme-1">
					<div class="block">
						<div class="desc">
							<p>
								Untuk deskripsi, maksimal terdapat 5 titik seperti ketika membuat sebuah paragraf. Ini memungkinkan tampilan agar terlihat lebih rapih.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection