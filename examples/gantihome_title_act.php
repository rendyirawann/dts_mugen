<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$logo_brand = $_POST['logo_brand'];
$home_title = $_POST['home_title'];
$home_description = $_POST['home_description'];




$edit = mysqli_query($conn, "UPDATE home SET logo_brand='$logo_brand', home_title='$home_title', home_description='$home_description' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=gantihome_title&pesan=edit');
else
	echo "Edit Logo Gagal";


 ?>