<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$visimisi_desc = $_POST['visimisi_desc'];




$edit = mysqli_query($conn, "UPDATE visimisi_title SET visimisi_desc='$visimisi_desc' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=ganti_visimisi_desc&pesan=edit');
else
	echo "Edit Deskripsi Gagal";


 ?>