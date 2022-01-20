<?php 
include('koneksi.php');

$id_ber = $_POST['id_berita'];
$judul_berita = $_POST['judul_berita'];
$berita = $_POST['berita'];
$nama_file = $_FILES['image']['name'];
$source = $_FILES['image']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE news SET judul_berita='$judul_berita',berita= '$berita', image ='$nama_file' WHERE id_berita='$id_ber' ");

if($edit)
	header('location: news_admin.php');
else
	echo "Edit Menu Gagal";


 ?>