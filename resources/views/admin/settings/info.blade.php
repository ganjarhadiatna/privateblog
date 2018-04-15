@extends('admin.layouts.app')

@section('content')
<script type="text/javascript">
	function deleteInfo(id) {
		var a = confirm('Hapus informasi ini ?');
		if (a === true) {
			$.ajax({
				url: '{{ url("/setting/info/delete") }}',
				type: 'post',
				data: {'idsiteabout': id},
			})
			.done(function(data) {
				if (data) {
					alert('Informasi berhasil dihapus.');
					window.location = '{{ url("/setting/info") }}';
				}
			})
			.fail(function(data) {
				//console.log(data.statusText);
				alert('Informasi gagal dihapus.');
			});
		}
	}
</script>
<div class="header">
	<div class="header-mn">
		<div class="header-pl">
			<div class="hd-pl-left">
				<h1><a href="{{ url('/setting/info') }}">Informasi Situs</a></h1>
			</div>
			<div class="hd-pl-right">
				<a href="{{ url('/setting/info/add') }}">
					<input type="button" name="hapus" class="btn btn-main-color" value="Tambah Informasi">
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
					<th>Judul</th>
					<th>Deskripsi</th>
					<th>Admin</th>
					<th>Lainnya</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($info as $dt)
				<tr>
					<td>#{{ $dt->idsiteabout }}</td>
					<td>{{ $dt->title }}</td>
					<td>{{ $dt->descr }}</td>
					<td>#{{ $dt->id }}</td>
					<td>
						<button class="btn btn-main2-color" onclick="deleteInfo('{{ $dt->idsiteabout }}')">
							<span class="fa fa-lg fa-trash-alt"></span>
						</button>
						<a href="{{ url('/setting/info/edit/'.$dt->idsiteabout) }}">
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