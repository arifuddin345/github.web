<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR</title>
</head>
<body>
	<h1 align="center">FORM REGISTER</h1>
	<form action="aksi_register.php" method="post">
	<table align="center" >
		<tr>
			<td>Username *</td>
		</tr>
		<tr>
			<td><input type="text" name="username" size="30" maxlength="100"></td>
		</tr>
		<tr>
			<td>Password *</td>
		</tr>
		<tr>
			<td><input type="password" name="password" size="30" maxlength="100"></td>
		</tr>
		<tr>
			<td>Ulangi Password *</td>
		</tr>
		<tr>
			<td><input type="password" name="ulangi_password" size="30" maxlength="100"></td>
		</tr>
		<tr  >
			<td align="center" colspan="2"><a href="login.php"><button type="button">Kembali</button></a>   <button type="submit">Simpan</button></td>
		</tr>
	</table>
	</form>

</body>
</html>