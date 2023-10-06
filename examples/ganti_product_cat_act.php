<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$product_desc = $_POST['product_desc'];
$product_category1 = strtolower($_POST['product_category1']);
$product_category2 = strtolower($_POST['product_category2']);
$product_category3 = strtolower($_POST['product_category3']);


$edit = mysqli_query($conn, "UPDATE product_cat SET product_desc='$product_desc', product_category1='$product_category1', product_category2='$product_category2', product_category3='$product_category3' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=ganti_product_cat&pesan=edit');
else
	echo "Edit Product Category Gagal";


 ?>