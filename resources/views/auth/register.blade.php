<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
</head>
<body>

	<h1>Register</h1>

	<form method="post" action="{{ route('register') }}">
		@csrf

		<label>
			Name
			<input type="text" name="name">
		</label>
		<br>
		<br>

		<label>
			Email
			<input type="email" name="email">
		</label>
		<br>
		<br>

		<label>
			Password
			<input type="password" name="password">
		</label>
		<br>
		<br>

		<button>REGISTER</button>
	</form>

	<a href="/login">Ke halaman Login >></a>


</body>
</html>
