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
            <li><a href="event.php">Event</a></li>
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

 <!-- ======= About Me Section ======= -->
 <section id="profile" class="about">
      <div class="container">

        <div class="section-title">
          <span>Artikel</span>
          <h2>Artikel</h2>
          <p>Artikel Deskripsi Mugen Club</p>
        </div>

            <div class="content">
              <div class="row">
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
  <img src="assets/img/hero-bg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Artikel #1</h5>
    <p class="card-text">(DESKRIPSI ATAU ISI DARI ARTIKEL #1)</p>
    <a href="#" class="btn btn-primary">Baca Artikel</a>
  </div>
</div>
                </div>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
  <img src="assets/img/hero-bg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Artikel #2</h5>
    <p class="card-text">(DESKRIPSI ATAU ISI DARI ARTIKEL #1)</p>
    <a href="#" class="btn btn-primary">Baca Artikel</a>
  </div>
</div>
                </div>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
  <img src="assets/img/hero-bg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Artikel #3</h5>
    <p class="card-text">(DESKRIPSI ATAU ISI DARI ARTIKEL #1)</p>
    <a href="#" class="btn btn-primary">Baca Artikel</a>
  </div>
</div>
                </div>
              </div>
              <!-- <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtextr" style="color: #8a1ac2;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock" style="color: #2cbdee;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award" style="color: #ffb459;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div> -->
            </div><!-- End .content-->

            <!-- <div class="skills-content ps-lg-4">
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div> -->

          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->


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