<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<h1>Login</h1>

	<form method="post" action="{{ route('login') }}">
		@csrf

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

		<button>LOGIN</button>
	</form>

	<a href="/register">Ke halaman Register >></a>

</body>
</html>
