<?php
require 'functions.php';
$reservation = query("SELECT * FROM reservation ");

//tombol cari ditekan
if(isset($_POST["cari"])){
	$reservation = cari($_POST["keyword"]);
}
//ORDER BY id ASC = dari kecil kebesar
//ambil data dari tabel mahasiswa
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
 
//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row()//mengembalikan array numeric
//mysqli_fetch_assoc()//mengembalikan array associative
//mysqli_fetch_array()//mengembalikan keduanya
//mysqli_fetch_object()

//while ($mhs = mysqli_fetch_assoc($result) )
//{
	//var_dump($mhs);
//}

  ?>


    <!-- Required meta tags -->
    

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Tamu</h1>
<link rel="stylesheet" href="2.css">
<a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Data Tamu</button></a>
<br><br>
<form action="" method="post">
	<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari" >Cari</button>
	
</form>
<br>
<table class="table table-dark" border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Nama</th>
		<th>Cek In</th>
		<th>Cek Out</th>
		<th>ID Kamar</th>
		<th>Tipe Kamar</th>
		<th>ID Bed</th>
		<th>Tipe Bed</th>
		<th>Adult</th>
		<th>Children</th>
		<th>Preference</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach($reservation as $row) :  ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id_reservation=<?= $row ["id_reservation"]; ?>">ubah</a>
			<a href="hapus.php?id_reservation=<?= $row ["id_reservation"]; ?>" onclick="return confirm('apakah anda yakin ingin mengahpus?');">hapus</a>
		</td>
		<td><?= $row ["nama"]; ?></td>
		<td><?= $row ["check_in"]; ?></td>
		<td><?= $row ["check_out"]; ?></td>
		<td><?= $row ["id_tipe"]; ?></td>
		<td><?= $row ["tipe_kamar"]; ?></td>
		<td><?= $row ["id_bed"]; ?></td>
		<td><?= $row ["bed_name"]; ?></td>
		<td><?= $row ["adult"]; ?></td>
		<td><?= $row ["children"]; ?></td>
		<td><?= $row ["preference"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>