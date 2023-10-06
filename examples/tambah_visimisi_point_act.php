<?php
include '../base/koneksi.php';
$visi_point = $_POST['visi_point'];
$misi_point = $_POST['misi_point'];
mysqli_query(
    $conn,
    "insert into visimisi_point values(NULL,'$visi_point','$misi_point')"
);
header('location:admin.php?p=tambah_visimisi_point&pesan=tambah');
?>
