@extends('layout.app')

@section('title', 'Student')

@section('content')

	<h1>Daftar Siswa</h1>

	<a href="/students/create">Tambah Data</a>

	<table border="1" style="width: 100%;">
		<thead>
			<tr>
				<th>guardian id</th>
				<th>name</th>
				<th>nis</th>
				<th>gender</th>
				<th>birth date</th>
				<th>address</th>
				<th>class</th>
				<th>majors</th>
				<th>height</th>
				<th>weight</th>
				<th>photo</th>
				<th>action</th>
			</tr>
		</thead>

		<tbody>
			@foreach($students as $student)
			<tr>
				<td>{{ $student->guardian->name }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->nis }}</td>
				<td>{{ $student->gender }}</td>
				<td>{{ $student->birth_date }}</td>
				<td>{{ $student->address }}</td>
				<td>{{ $student->class }}</td>
				<td>{{ $student->majors }}</td>
				<td>{{ $student->height }}</td>
				<td>{{ $student->weight }}</td>
				<td>
					<img src="/img/{{ $student->photo }}" class="w-100">
				</td>
				<td>
					<button>
						<a href="/students/edit/{{ $student->id }}">edit</a>
					</button>

					<form action="/students/delete/{{ $student->id }}" method="post">
						@csrf @method('DELETE')
						<button>hapus</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
