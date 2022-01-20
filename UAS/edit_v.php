<?php 
include('koneksi.php');

$id_video = $_POST['id_video'];
$judul_yt= $_POST['judul_yt'];
$link_yt = $_POST['link_yt'];
$nama_file = $_FILES['image_yt']['name'];
$source = $_FILES['image_yt']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE video SET judul_yt='$judul_yt', link_yt = '$link_yt', image_yt ='$nama_file' WHERE id_video='$id_video' ");

if($edit)
	header('location: news_admin.php');
else
	echo "Edit Menu Gagal";


 ?>