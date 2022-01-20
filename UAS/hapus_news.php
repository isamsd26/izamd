<?php 

include('koneksi.php');

$id_berita = $_GET['id_berita'];

$hapus= mysqli_query($koneksi, "DELETE FROM news WHERE id_berita='$id_berita'");

if($hapus)
	header('location: news_admin.php');
else
	echo "Hapus data gagal";

 ?>