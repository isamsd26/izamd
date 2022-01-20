<?php 

include('koneksi.php');

$id_video = $_GET['id_video'];

$hapus= mysqli_query($koneksi, "DELETE FROM video WHERE id_video='$id_video'");

if($hapus)
	header('location: news_admin.php');
else
	echo "Hapus data gagal";

 ?>