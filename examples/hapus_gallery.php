<?php
include '../base/koneksi.php';

$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM gallery where id='$id'");
mysqli_query($conn, "UPDATE gallery set id = id-1 WHERE id > $id");
mysqli_query($conn, "ALTER TABLE gallery AUTO_INCREMENT = 1");
header("location:admin.php?p=tambah_gallery&pesan=hapus");
?>