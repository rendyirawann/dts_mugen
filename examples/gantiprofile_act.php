<?php 
include('../base/koneksi.php');

$id = $_POST['id'];
$profile_desc = $_POST['profile_desc'];
$company_name = $_POST['company_name'];
$leader_name = $_POST['leader_name'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];
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




$edit = mysqli_query($conn, "UPDATE profile_home SET profile_desc='$profile_desc', company_name='$company_name', leader_name='$leader_name', website='$website', phone=$phone, city='$city', email='$email', img ='$img' WHERE id='$id' ");

if($edit)
	header('location: admin.php?p=gantiprofile&pesan=edit');
else
	echo "Edit Profile Gagal";

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