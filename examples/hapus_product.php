<?php
include '../base/koneksi.php';

$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM product where id='$id'");
mysqli_query($conn, "UPDATE product set id = id-1 WHERE id > $id");
mysqli_query($conn, "ALTER TABLE product AUTO_INCREMENT = 1");
header("location:admin.php?p=tambah_product&pesan=hapus");
?>