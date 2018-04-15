@extends('admin.layouts.app')

@section('content')
<script type="text/javascript">
	function getData() {
		var ttl = $('#title').val();
		var subttl = $('#subtitle').val();

		$.ajax({
			url: '{{ url("/setting/title/save") }}',
			type: 'post',
			data: {'title': ttl, 'subtitle': subttl},
		})
		.done(function(data) {
			if (data) {
				alert('Perubahan berhasil disimpan.');
				window.location = '{{ url("/setting/title") }}';
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
				<h1><a href="{{ url('/setting/title') }}">Judul & Sub-judul</a></h1>
			</div>
			<div class="hd-pl-right"></div>
		</div>
	</div>
</div>
<div class="frame-home">
	<div class="grid grid-2x">
		<div class="grid-1">
			<form method="post" action="javascript:void(0)" onsubmit="getData()">
				@foreach ($ttl as $dt)
				<div class="form-field theme-1">
					<div class="block pad-bottom-15px">
						<div class="ttl">Judul</div>
						<input type="text" name="title" class="txt txt-primary-color" placeholder="" id="title" value="{{ $dt->title }}" required="true">
					</div>
					<div class="block">
						<div class="ttl">Sub-Judul</div>
						<textarea class="txt edit-text txt-full txt-primary-color" id="subtitle" required="true">{{ $dt->subtitle }}</textarea>
					</div>
				</div>
				@endforeach
				<div class="form-field theme-1">
					<input type="submit" name="save" class="btn btn-main-color btn-focus txt-small" value="Simpan">
				</div>
			</form>
		</div>
		<div class="grid-2">
			<div class="form-field theme-1">
				<div class="block">
					<div class="desc">
						<p>
							- Form Judul diisi dengan judul dari situs ini. Judul akan diletakan didepan banner situs.
						</p>
						<br>
						<p>
							- Form Sub-Judul diisi dengan sub judul dari situs ini. Sub Judul berada dibawah Judul, dan diletakan didepan banner situs.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection