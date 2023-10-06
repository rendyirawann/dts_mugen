<?php
include '../base/koneksi.php';

$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM artikel where id='$id'");
mysqli_query($conn, "UPDATE artikel set id = id-1 WHERE id > $id");
mysqli_query($conn, "ALTER TABLE artikel AUTO_INCREMENT = 1");
header("location:admin.php?p=tambah_artikel&pesan=hapus");
?>