<?php
require 'functions.php';

//ambil data diurl
$id_reservation = $_GET["id_reservation"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM reservation where id_reservation = $id_reservation")[0];


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	//cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';

			</script>
			";
	}else {
		echo "
			<script>
				alert('data gagal ubah');
				document.location.href = 'index.php';

			</script>
			";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Tamu</title>
</head>
<body>
	<link rel="stylesheet" href="1.css">
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id_reservation" value="<?= $mhs["id_reservation"]; ?>">
	<table width="600" border="0" cellspacing="0" cellpadding="5">
		<tr>
			<td colspan="2" align="center"><h2>Ubah Data Tamu</h2></td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td> <input type="text" name="nama" id="nama" required=""value="<?= $mhs["nama"]; ?>"></td>
		</tr>
		<tr>
			<td>Check In</td>
			<td><input type="text" name="check_in" id="check_in" required=""value="<?= $mhs["check_in"]; ?>"></td>
		</tr>
		<tr>
			<td>Check Out</td>
			<td><input type="text" name="check_out" id="check_out" required=""value="<?= $mhs["check_out"]; ?>"></td>
		</tr>
		<tr>
			<td>ID Kamar</td>
			<td><input type="text" name="id_tipe" id="id_tipe" required=""value="<?= $mhs["id_tipe"]; ?>"></td>
		</tr>
		<tr>
			<td>Tipe Kamar</td>
			<td><input type="text" name="tipe_kamar" id="tipe_kamar" required=""value="<?= $mhs["tipe_kamar"]; ?>"></td>
		</tr>
		<tr>
			<td>ID Bed</td>
			<td><input type="text" name="id_bed" id="id_bed" required=""value="<?= $mhs["id_bed"]; ?>"></td>
		</tr>
		<tr>
			<td>Tipe Bed</td>
			<td><input type="text" name="bed_name" id="bed_name" required=""value="<?= $mhs["bed_name"]; ?>"></td>
		</tr>
		<tr>
			<td>Adult</td>
			<td><input type="text" name="adult" id="adult" required=""value="<?= $mhs["adult"]; ?>"></td>
		</tr>
		<tr>
			<td>Children</td>
			<td><input type="text" name="children" id="children" required=""value="<?= $mhs["children"]; ?>"></td>
		</tr>
		<tr>
			<td>Preference</td>
			<td><input type="text" name="preference" id="preference" required=""value="<?= $mhs["preference"]; ?>"></td>
		</tr>
		<td><input type="submit" name="submit" id="submit" value="ubah"></td>
	</table>
	</form>
</body>
</html>
