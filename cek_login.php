<?php
include 'base/koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM akun WHERE username ='$username' AND password = '$password' ");
$data = mysqli_fetch_array($sql);

if (!empty($data)) {
    $_SESSION['id_akun']            = $data['id_akun'];
    $_SESSION['nama_lengkap']       = $data['nama_lengkap'];
    $_SESSION['email']              = $data['email'];
    $_SESSION['username']           = $data['username'];
    $_SESSION['password']           = $data['password'];
    
    echo "<script> alert('Username dan Password Benar!'); </script>";
    echo "<script> window.location='examples/admin.php' </script>";
} else {
    header("location:login.php?pesan=gagal");
}
