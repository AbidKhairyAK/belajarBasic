@extends('layout.app')

@section('title', 'Student')

@section('content')

	<form method="post" action="/students/store" enctype="multipart/form-data">
		@csrf

		<label>
			guardian

			<select name="guardian_id">
				@foreach($guardians as $guardian)
					<option value="{{ $guardian->id }}">
						{{ $guardian->name }}
					</option>
				@endforeach
			</select>

		</label>
		<br><br>

		<label>
			name
			<input type="text" name="name">
		</label>
		<br><br>

		<label>
			nis
			<input type="text" name="nis">
		</label>
		<br><br>

		<label>
			gender

			<label>
				<input type="radio" name="gender" value="l">
				Laki-laki
			</label>
			<label>
				<input type="radio" name="gender" value="p">
				Perempuan
			</label>

		</label>
		<br><br>

		<label>
			birth date
			<input type="date" name="birth_date">
		</label>
		<br><br>

		<label>
			address
			<textarea type="text" name="address"></textarea>
		</label>
		<br><br>

		<label>
			class
			<select name="class">
				<option value="10">Kelas 10</option>
				<option value="11">Kelas 11</option>
				<option value="12">Kelas 12</option>
			</select>
		</label>
		<br><br>

		<label>
			majors
			<select name="majors">
				<option value="IPA">IPA</option>
				<option value="IPS">IPS</option>
				<option value="BAHASA">BAHASA</option>
				<option value="AGAMA">AGAMA</option>
			</select>
		</label>
		<br><br>

		<label>
			height
			<input type="number" name="height">
		</label>
		<br><br>

		<label>
			weight
			<input type="number" name="weight">
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
