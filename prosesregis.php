<?php
session_start();
if(!isset($_SESSION['data_mhs'])){
	$data_mhs = array();
} else {
	$data_mhs = $_SESSION['data_mhs'];
}
if (isset($_POST['submit'])) {
	$nim 	= isset($_POST['nim']) ? $_POST['nim'] : "";
	$nama 	= isset($_POST['nama']) ? $_POST['nama'] : "";
	$email 	= isset($_POST['email']) ? $_POST['email'] : "";
	//=========================================================================================================
	if(!is_numeric($nim)){
		$_SESSION['pesan_error'] = "NIM Harus Angka";
		header('location: registrasi.php');
	} else {
		$new_data = array(
					'nim' 	=> $nim,
					'nama' 	=> $nama,
					'email' => $email
				);
		array_push($data_mhs, $new_data);
		$_SESSION['data_mhs'] = $data_mhs;
	}
}
?>
<table>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>
	<?php
	$data = $_SESSION['data_mhs'];
	$num = 0;
	while ($num < count($data)) {
	?>
	<tr>
		<td><?php echo $data[$num]['nim']; ?></td>
		<td><?php echo $data[$num]['nama']; ?></td>
		<td><?php echo $data[$num]['email']; ?></td>
	</tr>
	<?php
	$num++;
	}
	?>
</table>
<br>
<a href="registrasi.php">Tambah Data</a>