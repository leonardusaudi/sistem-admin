<?php
// koneksi ke database
$conn = mysqli_connect ("localhost", "root", "", "hotel");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
} 

function tambah($data)
{
//<div style=position:absolute;top : 0;buttom : 0; left : 0; right :0; background-color:black; font-size:100px; color:red; text-align : center;> HAHAHAHA ANDA TELAH DI HACK!!!!!</div>
	global $conn;
	//ambil data dari tiap elemen data form
	//html...supaya tidak bisa dihack orang
	$nama = htmlspecialchars($data["nama"]);
	$check_in = htmlspecialchars($data["check_in"]);
	$check_out = htmlspecialchars($data["check_out"]);
	$id_tipe = htmlspecialchars($data["id_tipe"]);
	$tipe_kamar = htmlspecialchars($data["tipe_kamar"]);
	$id_bed = htmlspecialchars($data["id_bed"]);
	$bed_name = htmlspecialchars($data["bed_name"]);
	$adult = htmlspecialchars($data["adult"]);
	$children = htmlspecialchars($data["children"]);
	$preference = htmlspecialchars($data["preference"]);

	//upload gambar
	
	//$gambar = htmlspecialchars($data["gambar"]); untuk type data file

	//query insert data
	$query = "INSERT INTO reservation VALUES ('','$nama','$check_in','$check_out','$id_tipe','$tipe_kamar','$id_bed','$bed_name','$adult','$children','$preference')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id_reservation){
	global $conn;
	mysqli_query($conn, "DELETE FROM reservation WHERE id_reservation = $id_reservation");
	return mysqli_affected_rows($conn);
 }
 function ubah($data){
 	global $conn;
 	$id_reservation = $data["id_reservation"];
	//ambil data dari tiap elemen data form
//html...supaya tidak bisa dihack orang
	$nama = htmlspecialchars($data["nama"]);
	$check_in = htmlspecialchars($data["check_in"]);
	$check_out = htmlspecialchars($data["check_out"]);
	$id_tipe = htmlspecialchars($data["id_tipe"]);
	$tipe_kamar = htmlspecialchars($data["tipe_kamar"]);
	$id_bed = htmlspecialchars($data["id_bed"]);
	$bed_name = htmlspecialchars($data["bed_name"]);
	$adult= htmlspecialchars($data["adult"]);
	$children = htmlspecialchars($data["children"]);
	$preference = htmlspecialchars($data["preference"]);

	//cek apakah user pilih gambar baru atau tidak 


	//query ubah data
	$query = "UPDATE reservation SET 
		nama ='$nama',check_in = '$check_in', check_out ='$check_out', id_tipe ='$id_tipe', tipe_kamar ='$tipe_kamar',id_bed ='$id_bed', bed_name ='$bed_name', adult ='$adult', children ='$children', preference ='$preference'
		WHERE id_reservation = $id_reservation";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
 }

 function cari($keyword){
 	$query = "SELECT * FROM reservation WHERE 
 			nama LIKE '%$keyword%' OR 
 			check_in LIKE '%$keyword%' OR
 			check_out LIKE '%$keyword%' OR
 			id_tipe LIKE '%$keyword%' OR
 			tipe_kamar LIKE '%$keyword%' OR
 			id_bed LIKE '%$keyword%' OR
 			bed_name LIKE '%$keyword%' OR
 			adult LIKE '%$keyword%' OR
 			children LIKE '%$keyword%' OR
 			preference LIKE '%$keyword%'
 			";
 		return query($query);
 }
 ?>
