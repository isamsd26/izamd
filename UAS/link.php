<?php 
session_start();

$id_menu = $_GET['id_menu'];

if (isset($_SESSION['news'][$id]))
{
	$_SESSION['news'][$id]+=1;
}

else 
{
	$_SESSION['news'][$id_menu]=1;
}

echo "<script>alert('Video telah masuk ke news anda');</script>";
echo "<script>location= 'news.php'</script>";

 ?>