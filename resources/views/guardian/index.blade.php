@extends('layout.app')

@section('title', 'Guardian')

@section('content')
	<h1>Data Wali</h1>

	<a href="/guardians/create">Tambah Data</a>

	<table border="1" style="width: 100%;">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIK</th>
				<th>Nomor HP</th>
				<th>Gender</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Orangtua Kandung</th>
				<th>Students</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			@foreach($guardians as $guardian)
			<tr>
				<td>{{ $guardian->name }}</td>
				<td>{{ $guardian->nik }}</td>
				<td>{{ $guardian->phone }}</td>
				<td>{{ $guardian->gender == 'l' ? 'Laki-laki' : 'Perempuan' }}</td>
				<td>{{ $guardian->birth_date }}</td>
				<td>{{ $guardian->address }}</td>
				<td>{!! $guardian->is_parent ? '&check;' : 'x' !!}</td>
				<td>{{ $guardian->students()->count() }}</td>
				<td>{{ $guardian->created_at }}</td>
				<td>
					<button>
						<a href="/guardians/edit/{{ $guardian->id }}">edit</a>
					</button>

					<form action="/guardians/delete/{{ $guardian->id }}" method="post">
						@csrf @method('DELETE')
						<button>hapus</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
