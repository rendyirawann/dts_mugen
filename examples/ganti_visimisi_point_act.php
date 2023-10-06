<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$visi_point = $_POST['visi_point'];
$misi_point = $_POST['misi_point'];




$edit = mysqli_query($conn, "UPDATE visimisi_point SET visi_point='$visi_point', misi_point='$misi_point' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=tambah_visimisi_point&pesan=edit');
else
	echo "Edit Deskripsi Gagal";


 ?>