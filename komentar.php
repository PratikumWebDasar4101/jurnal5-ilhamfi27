<!DOCTYPE html>
<html>
	<head>
		<title>Komentar</title>
	</head>
	<body>
		<form action=" " method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" required></td>
				</tr>
				<tr>
					<td>Komentar</td>
					<td><textarea name="komentar"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$nama 		= isset($_POST['nama']) ? $_POST['nama'] : "";
	$komentar 	= isset($_POST['komentar']) ? $_POST['komentar'] : "";
	$data = explode(" ", $komentar);
	if (count($data) < 5) {
		echo "Komentar Anda Harus Lebih Dari 5 Kata!";
	} else {
		echo "Komentar anda : <br>" . $komentar;
	}
}
?>