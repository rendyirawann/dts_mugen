<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$oldImg = $_POST["oldImg"];
if(file_exists("../assets/img/upload/$oldImg")){
	unlink("../assets/img/upload/$oldImg");
	}
 // Check Upload or Not
 if ( $_FILES['img']['error'] === 4 ){
	$img = $oldImg;
}else {
	$img = uploadHero();
}
$name_product = $_POST['name_product'];
$desc_product = $_POST['desc_product'];
$cat_product = strtolower($_POST['cat_product']);


$edit = mysqli_query($conn, "UPDATE product SET img='$img', name_product='$name_product', desc_product='$desc_product', cat_product ='$cat_product' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=tambah_product&pesan=edit');
else
	echo "Edit Product Content Gagal";


	function uploadHero() {
		$nameFile = $_FILES['img']['name'];
		$sizeFile = $_FILES['img']['size'];
		$error = $_FILES['img']['error'];
		$tmpName = $_FILES['img']['tmp_name'];
	
	
		// If picture not upload
		if ( $error === 4 ) {
			echo "<script>
			alert('Choose a Thumbnail Image First!');
			</script>";
			return false;
		}
	
		// Check image upload
		$extensionImgValid = ['jpg', 'jpeg', 'png', 'gif'];
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

 ?>