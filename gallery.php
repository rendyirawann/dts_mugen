<?php 
error_reporting(1);
require "base/koneksi.php";


$logos = query ("SELECT * FROM home"); 
$profile = query ("SELECT * FROM profile_home"); 



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= TITLE ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/landing/logo.gif" rel="icon">
  <link href="assets/img/landing/logo.gif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

  <div class="logo">
  <?php 

$query = mysqli_query($conn, "SELECT * FROM home WHERE id = '1'");
$logos = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
        <?php foreach($logos as $row) : ?>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/landing/logo.gif" alt="" class="img-fluid" width="60px"><span> <?= $row['logo_brand'];?></span></a>
      </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#profile">Profile</a></li>
        <li><a class="nav-link scrollto" href="#visimisi">Visi dan Misi</a></li>
        <li><a class="nav-link scrollto" href="#product">Produk Kami</a></li>
        <li><a class="nav-link scrollto " href="#contact">Kontak Kami</a></li>
        <li><a class="nav-link scrollto " href="#footer">About Us</a></li>
        
        <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        <li class="dropdown"><a href="#"><span>Navigation</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="artikel.php">Artikel</a></li>
            <li><a href="#">Event</a></li>
            <li><a href="gallery.php">Galery Kami</a></li>
            <li><a href="klien.php">Klien Kami</a></li>
            <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="login.php" type="button" class="btn btn-primary log">Sign In</a></li>
                <li><a href="registrasi.php" type="button" class="btn btn-danger log">Signup</a></li>
                <!-- <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li> -->
              </ul>
            </li>
            <!-- <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li> -->
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1><?= $row['home_title'];?></h1>
      <h2><?= $row['home_description'];?></h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->
  <?php endforeach ?>

  <main id="main">

 <!-- ======= My Portfolio Section ======= -->
 <section id="gallery" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Gallery</span>
          <h2>Gallery</h2>
          <p>Gallery Deskripsi Mugen</p>
        </div>

        <div class="content">
          <div class="row">
          <?php 

$query = mysqli_query($conn, "SELECT * FROM gallery");
$gallery = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($gallery as $galleryclub) : ?>
          <div class="col-lg-12 col-md-6 portfolio mb-3 mt-3">
            <h4>Gallery Club</h4>
            <div class="portfolio-img"><img src="assets/img/upload/<?= $galleryclub['img'];?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4><?= $artikels['title_artikel'];?></h4>
              <p><?= $artikels['content_artikel'];?></p> -->
              <!-- <a href="assets/img/hero-bg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"></a> -->
              <!-- <a href="#" class="details-link" title="More Details"><button type="button" class="btn btn-primary">Read Now</button></a> -->
            </div>
          </div>
        </div>
        <?php endforeach ?>
        </div>
        </div>
    </section><!-- End My Portfolio Section -->



  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <h2>About Us</h2>
    <h3>M U G E N</h3>
    <p>Japanese Racing Club Motorcycle</p>
    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
      &copy; Copyright <strong><span>MUGEN</span></strong>. All Rights Reserved
    </div>
    <!-- <div class="credits"> -->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> -->
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>