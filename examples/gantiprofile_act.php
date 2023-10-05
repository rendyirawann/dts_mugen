<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$profile_desc = $_POST['profile_desc'];
$company_name = $_POST['company_name'];
$leader_name = $_POST['leader_name'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];




$edit = mysqli_query($conn, "UPDATE profile_home SET profile_desc='$profile_desc', company_name='$company_name', leader_name='$leader_name', website='$website', phone=$phone, city='$city', email='$email' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=gantiprofile&pesan=edit');
else
	echo "Edit Profile Gagal";


 ?>