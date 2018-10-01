<!DOCTYPE html>
<html>
	<head>
		<title>Form Registrasi</title>
	</head>
	<body>
		<form action="prosesregis.php">
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" pattern="[0-9]{10}" title="Harus 10 Digit" required></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title="Nama Harus Lebih Dari 1 Karakter dan Kurang Dari 25 Karakter dan Tidak Mengandung Angka" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>