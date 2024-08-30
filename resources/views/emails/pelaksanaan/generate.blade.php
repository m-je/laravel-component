<html>
<head>
	<title>Generate Akun</title>
</head>
<body>
	<p>Dear,</p>
	<br>
	<p>
		Selamat bergabung di aplikasi CSMS. Untuk masuk ke aplikasi csms gunakan akun berikut :
	</p>
	<br>
	<table border="0">
		<tr>
			<td>Username/Email : </td>
			<td>{{ $data['email'] }}</td>
		</tr>
		<tr>
			<td>Password : </td>
			<td>{{ $data['password'] }}</td>
		</tr>
	</table>
	<p>
		<a href="{{ url('login') }}">Aplikasi CSMS</a>
	</p>
	<br>
	<br>
	<p>Hormat kami,</p>
	<p>PT TPPI </p>
</body>
</html>