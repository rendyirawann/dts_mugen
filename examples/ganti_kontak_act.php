<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$contact_desc = $_POST['contact_desc'];
$contact_iframe = $_POST['contact_iframe'];
$link_name1 = strtolower($_POST['link_name1']);
$link1 = $_POST['link1'];
$link_name2 = strtolower($_POST['link_name2']);
$link2 = $_POST['link2'];
$link_name3 = strtolower($_POST['link_name3']);
$link3 = $_POST['link3'];
$link_name4 = strtolower($_POST['link_name4']);
$link4 = $_POST['link4'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];




$edit = mysqli_query($conn, "UPDATE contact_us SET contact_desc='$contact_desc', contact_iframe='$contact_iframe', link_name1='$link_name1', link1='$link1', link_name2='$link_name2', link2='$link2', link_name3='$link_name3', link3='$link3', link_name4='$link_name4', link4='$link4', email='$email', no_hp=$no_hp WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=ganti_kontak&pesan=edit');
else
	echo "Edit Contact Gagal";


 ?>