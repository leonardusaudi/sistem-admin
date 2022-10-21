<?php
require 'functions.php' ;
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	//cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0 ){
		echo "	<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
			";
	}else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php';

			</script>
			";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Tamu </title>
</head>
<body>
	<link rel="stylesheet" href="1.css">
	<form action="" method="POST" >
	<table width="600" border="0" cellspacing="0" cellpadding="5">
		<tr>
			<td colspan="2" align="center"><h2>Form Input Data Tamu</h2></td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td width="123">Nama</td>
			<td width="465"> <input type="text" name="nama" id="nama" required=""></td>
		</tr>
		<tr>
			<td>Check In</td>
			<td> <input type="date" name="check_in" id="check_in" required=""></td>
		</tr>
		<tr>
			<td>Check Out</td>
			<td><input type="date" name="check_out" id="check_out" required=""></td>
		</tr>
		<tr>
		<td>ID Tipe Kamar</td>
		<td><input type="text" name="id_tipe" id="id_tipe" required=""></td>
		</tr>
		<tr>
		<tr>
		<td>Tipe Kamar</td>
		<td><input type="text" name="tipe_kamar" id="tipe_kamar" required=""></td>
		</tr>
		<tr>
		<td>ID Tipe Bed</td>
		<td><input type="text" name="id_bed" id="id_bed" required=""></td>
		</tr>
		<tr>
		<tr>
		<td>Tipe Bed</td>
		<td><input type="text" name="bed_name" id="bed_name" required=""></td>
		</tr>
		<tr>
		<td>Adult</td>
		<td><input type="text" name="adult" id="adult" required=""></td>
		</tr>
		<tr>
		<td>Children</td>
		<td><input type="text" name="children" id="children" required=""></td>
		</tr>
		<tr>
		<td>Preference</td>
		<td><input type="text" name="preference" id="preference" required=""></td>
		</tr>
		
		<td><input type="submit" name="submit" id="submit" value="submit">
			<input type="reset" name="cancel" id="cancel" value="cancel"></td>
	</table>
	</form>
</body>
</html>
