<?php
include 'base/koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$Verifypassword = $_POST['Verifypassword'];

$sql = mysqli_query($conn, "SELECT username FROM akun WHERE (username = '$username') ");
if (mysqli_fetch_assoc($sql)) {
    echo "<script>
          alert('Username yang anda pilih telah terdaftar! Silahkan Pilih Username Yang Lain');
          document.location.href = 'registrasi.php';
        </script>";
    return false;
} else {
    mysqli_query($conn, "INSERT INTO akun VALUES(NULL, '$nama_lengkap', '$email', '$username', '$password')");
    header("location:login.php?pesan=daftar");
}

// if (!empty($data)) {
//     $_SESSION['id_akun']            = $data['id_akun'];
//     $_SESSION['username']           = $data['username'];
//     $_SESSION['password']           = $data['password'];
//     $_SESSION['nama_lengkap']       = $data['nama_lengkap'];
//     $_SESSION['no_hp']              = $data['no_hp'];

//     echo "<script> alert('Username dan Password Benar!'); </script>";
//     echo "<script> window.location='index.php' </script>";
// } else {
//     header("location:login.php?pesan=gagal");
// }
