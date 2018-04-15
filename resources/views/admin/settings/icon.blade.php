@extends('admin.layouts.app')

@section('content')
<script type="text/javascript">
	function deleteInfo(id) {
		var a = confirm('Hapus ikon ini ?');
		if (a === true) {
			$.ajax({
				url: '{{ url("/setting/icon/delete") }}',
				type: 'post',
				data: {'idicon': id},
			})
			.done(function(data) {
				if (data) {
					alert('Ikon berhasil dihapus.');
					window.location = '{{ url("/setting/icon") }}';
				}
			})
			.fail(function(data) {
				//console.log(data.statusText);
				alert('Ikon gagal dihapus.');
			});
		}
	}
</script>
<div class="header">
	<div class="header-mn">
		<div class="header-pl">
			<div class="hd-pl-left">
				<h1><a href="{{ url('/setting/icon') }}">Ikon</a></h1>
			</div>
			<div class="hd-pl-right">
				<a href="{{ url('/setting/icon/add') }}">
					<input type="button" name="hapus" class="btn btn-main-color" value="Tambah Ikon">
				</a>
			</div>
		</div>
	</div>
</div>
<div class="frame-home">

	<div>
		<table class="table theme-1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Ikon</th>
					<th>Code</th>
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Admin</th>
					<th>Lainnya</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($icon as $dt)
				<tr class="center">
					<td>#{{ $dt->idicon }}</td>
					<td><span class="{{ $dt->code }}"></span></td>
					<td>{{ $dt->code }}</td>
					<td>{{ $dt->title }}</td>
					<td>{{ $dt->descr }}</td>
					<td>#{{ $dt->id }}</td>
					<td>
						<button class="btn btn-main2-color" onclick="deleteInfo('{{ $dt->idicon }}')">
							<span class="fa fa-lg fa-trash-alt"></span>
						</button>
						<a href="{{ url('/setting/icon/edit/'.$dt->idicon) }}">
							<button class="btn btn-main2-color">
								<span class="fa fa-lg fa-pencil-alt"></span>
							</button>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="pad-20px"></div>

</div>
@endsection