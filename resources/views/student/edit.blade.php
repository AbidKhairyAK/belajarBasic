@extends('layout.app')

@section('title', 'Student')

@section('content')

	<form method="post" action="/students/update/{{ $student->id }}" enctype="multipart/form-data">
		@csrf
		@method('PUT')

		<label>
			guardian id
			<input type="text" name="guardian_id" value="{{ $student->guardian_id }}">
		</label>
		<br><br>

		<label>
			name
			<input type="text" name="name" value="{{ $student->name }}">
		</label>
		<br><br>

		<label>
			nis
			<input type="text" name="nis" value="{{ $student->nis }}">
		</label>
		<br><br>

		<label>
			gender

			<label>
				<input type="radio" name="gender" {{ $student->gender == 'l' ? 'checked' : null }} value="l">
				Laki-laki
			</label>
			<label>
				<input type="radio" name="gender" {{ $student->gender == 'p' ? 'checked' : null }} value="p">
				Perempuan
			</label>

		</label>
		<br><br>

		<label>
			birth date
			<input type="date" name="birth_date" value="{{ $student->birth_date }}">
		</label>
		<br><br>

		<label>
			address
			<textarea type="text" name="address">
				{{ $student->address }}
			</textarea>
		</label>
		<br><br>

		<label>
			class
			<select name="class">
				<option value="10" {{ $student->class == '10' ? 'selected' : null }}>Kelas 10</option>
				<option value="11" {{ $student->class == '11' ? 'selected' : null }}>Kelas 11</option>
				<option value="12" {{ $student->class == '12' ? 'selected' : null }}>Kelas 12</option>
			</select>
		</label>
		<br><br>

		<label>
			majors
			<select name="majors">
				<option value="IPA" {{ $student->majors == 'IPA' ? 'selected' : null }}>IPA</option>
				<option value="IPS" {{ $student->majors == 'IPS' ? 'selected' : null }}>IPS</option>
				<option value="BAHASA" {{ $student->majors == 'BAHASA' ? 'selected' : null }}>BAHASA</option>
				<option value="AGAMA" {{ $student->majors == 'AGAMA' ? 'selected' : null }}>AGAMA</option>
			</select>
		</label>
		<br><br>

		<label>
			height
			<input type="number" name="height" value="{{ $student->height }}">
		</label>
		<br><br>

		<label>
			weight
			<input type="number" name="weight" value="{{ $student->weight }}">
		</label>
		<br><br>

		<label>
			photo
			<input type="file" name="photo_file" accept="image/*">
		</label>
		<br><br>


		<button>SUBMIT</button>
	</form>
@endsection
