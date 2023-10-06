<?php
include '../base/koneksi.php';
// Upload img
$img = uploadImg();
if( !$img ) {
    return false;
}

mysqli_query(
    $conn,
    "insert into gallery values(NULL, '$img')"
);

function uploadImg() {
    $nameFile = $_FILES['img']['name'];
    $sizeFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];


    // If picture not upload
    if ( $error === 4 ) {
        echo "<script>
        alert('Choose a img Image First!');
        </script>";
        return false;
    }

    // Check image upload
    $extensionImgValid = ['jpg', 'jpeg', 'png'];
    $extensionImg = explode('.', $nameFile);
    $extensionImg = strtolower(end($extensionImg));
    if ( !in_array($extensionImg, $extensionImgValid ) ) {
        echo "<script>
        alert('File You Have Choosen is Not Image Type!');
        </script>";
        return false;
    }

    // Check size img
    if ( $sizeFile > 10000000) {
        echo "<script>
        alert('Image Size Too Large!');
        </script>";
        return false;
    }


    // Generate File IMG
    $nameFileNew = uniqid();
    $nameFileNew .= '.';
    $nameFileNew .= $extensionImg;
    // Image to TMP
    move_uploaded_file($tmpName, '../assets/img/upload/' . $nameFileNew);

    return $nameFileNew;

}
header('location:admin.php?p=tambah_gallery&pesan=tambah');
?>
