<?php
include '../base/koneksi.php';

$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM visimisi_point where id='$id'");
mysqli_query($conn, "UPDATE visimisi_point set id = id-1 WHERE id > $id");
mysqli_query($conn, "ALTER TABLE visimisi_point AUTO_INCREMENT = 1");
header("location:admin.php?p=tambah_visimisi_point&pesan=hapus");
?>