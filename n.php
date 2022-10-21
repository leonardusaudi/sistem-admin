<php 
error_reporting ();
$koneksi = mysql_connect(“localhost”,”root”,””) or die (“Koneksi gagal !” . Mysql_error());
If($koneksi) echo “koneksi berhasil”;
?>
