<?php
require 'functions.php';

$id_reservation = $_GET["id_reservation"];


if(hapus($id_reservation) > 0){
	echo "
		<script>
			alert('data berhasil dihapus');
			document.location.href = 'index.php';

		</script>
		";
}else{
	echo "
		<script>
			alert('data gagal dihapus');
			document.location.href = 'index.php';

		</script>
		";
}

?>