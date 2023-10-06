<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$about_desc = $_POST['about_desc'];


$edit = mysqli_query($conn, "UPDATE about SET about_desc='$about_desc' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=ganti_about&pesan=edit');
else
	echo "Edit Home Content Gagal";


 ?>