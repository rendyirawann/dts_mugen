<?php 
error_reporting(1);
require "base/koneksi.php";

    // Jika tombol submit ditekan
    if (isset ($_POST["submit"])) {
        
        // Cek berhasil atau tidak menambah data
        if (kirim_pesan ($_POST) > 0) {
            echo "
            <script>
                alert('Message Has Been Sent');
                document.location.href = 'index.php';
            </script>";
        }else {
            echo "
            <script>
                alert('Failed To Send Message');
                document.location.href = 'index.php';
            </script>";
        }
    }

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
        <a href="index.php"><img src="assets/img/upload/<?= $row['img'];?>" alt="" class="img-fluid" width="60px"><span> <?= $row['logo_brand'];?></span></a>
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
            <li><a href="examples/admin.php">Panel Admin</a></li>
            <!-- <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="login.php" type="button" class="btn btn-primary log">Panel</a></li>
                <li><a href="registrasi.php" type="button" class="btn btn-danger log">Signup</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li> -->
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
  <?php endforeach; ?>

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="profile" class="about">
      <div class="container">
      <?php 

$query = mysqli_query($conn, "SELECT * FROM profile_home WHERE id = '1'");
$profile = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($profile as $row) : ?>
        <div class="section-title">
          <span>Profile</span>
          <h2>Profile</h2>
          <p><?= $row['profile_desc'];?></p>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            <img src="assets/img/upload/<?= $row['img'];?>" alt="">
          </div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Company Name:</strong> <span><?= $row['company_name'];?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $row['website'];?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $row['phone'];?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $row['city'];?></span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Leader Name:</strong> <span><?= $row['leader_name'];?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $row['email'];?></span></li>
                  </ul>
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
            <?php endforeach; ?>

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

    <!-- ======= My Resume Section ======= -->
    <section id="visimisi" class="resume">
      <div class="container">
      <?php 

$query = mysqli_query($conn, "SELECT * FROM visimisi_title WHERE id = '1'");
$visimisi_title = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
        <?php foreach($visimisi_title as $row) : ?>
        <div class="section-title">
          <span>Visi dan Misi</span>
          <h2>Visi dan Misi</h2>
          <p><?= $row['visimisi_desc'];?></p>
        </div>
<?php endforeach ?>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Visi</h3>
            <div class="resume-item pb-0">
              <h4>Visi</h4>
              <!-- <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <p> -->
              <ul>
              <?php 

$query = mysqli_query($conn, "SELECT * FROM visimisi_point");
$visi_point = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($visi_point as $row) : ?>
                <li><?= $row['visi_point'];?></li>
                <?php endforeach ?>
                <!-- <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li> -->
              </ul>
              </p>
            </div>

            <!-- <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div> -->
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Misi</h3>
            <div class="resume-item">
              <h4>Misi</h4>
              <!-- <h5>2019 - Present</h5> -->
              <!-- <p><em>Experion, New York, NY </em></p>
              <p> -->
              <ul>
                <!-- <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li> -->
                <?php 

$query = mysqli_query($conn, "SELECT * FROM visimisi_point");
$misi_point = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($misi_point as $row) : ?>
                <li><?= $row['misi_point'];?></li>
                <?php endforeach ?>
              </ul>
              </p>
            </div>
            <!-- <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
              </p>
            </div> -->
          </div>
        </div>

      </div>
    </section><!-- End My Resume Section -->

    <!-- ======= My Portfolio Section ======= -->
    <section id="product" class="portfolio">
      <div class="container">
      <?php 

$query = mysqli_query($conn, "SELECT * FROM product_cat");
$category = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($category as $catproduct) : ?>
        <div class="section-title">
          <span>Produk Kami</span>
          <h2>Produk Kami</h2>
          <p><?= $catproduct['product_desc'];?></p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-<?= $catproduct['product_category3'];?>"><?= $catproduct['product_category1'];?></li>
          <li data-filter=".filter-<?= $catproduct['product_category3'];?>"><?= $catproduct['product_category2'];?></li>
          <li data-filter=".filter-<?= $catproduct['product_category3'];?>"><?= $catproduct['product_category3'];?></li>
        </ul>
<?php endforeach ?>
        <div class="row portfolio-container">
        <?php 

$query = mysqli_query($conn, "SELECT * FROM product");
$productclub = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($productclub as $our) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $our['cat_product'];?>">
            <div class="portfolio-img"><img src="assets/img/upload/<?= $our['img'];?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4><?= $our['name_product'];?></h4>
              <p><?= $our['desc_product'];?></p>
              <a href="assets/img/upload/<?= $our['img'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="#product" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
<?php endforeach ?>
          <!--  -->

        </div>
        

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
    <?php 

$query = mysqli_query($conn, "SELECT * FROM contact_us");
$contact_us = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($contact_us as $row) : ?>
      <div class="container">

        <div class="section-title">
          <span>Kontak Kami</span>
          <h2>Kontak Kami</h2>
          <p><?= $row['contact_desc'];?></p>
        </div>

        <div class="row">
          <div class="col-lg-12">
          <iframe src="<?= $row['contact_iframe'];?>" width="1300" height="450" style="border:1px solid whitesmoke;margin-bottom:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="<?= $row['link1'];?>" class="twitter"><i class="bi bi-<?= $row['link_name1'];?>"></i></a>
                    <a href="<?= $row['link2'];?>" class="facebook"><i class="bi bi-<?= $row['link_name2'];?>"></i></a>
                    <a href="<?= $row['link3'];?>" class="instagram"><i class="bi bi-<?= $row['link_name3'];?>"></i></a>
                    <a href="<?= $row['link4'];?>" class="linkedin"><i class="bi bi-<?= $row['link_name4'];?>"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p><?= $row['email'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Phone Number</h3>
                  <p><?= $row['no_hp'];?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <!-- <form action="contact/form-contact.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form> -->
            <form action="contact/form-contact.php" method="POST">
            <div class="row inputBox">
              <div class="col-md-6 form-group">
              <input id="name" class="form-control" type="text" name="name" placeholder="Nama Lengkap" required>
              </div>
              <div class="col-md-6 form-group">
              <input id="email" class="form-control" type="email" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
            <input id="subject" class="form-control" type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
            <textarea maxlength="254" type="text" name="message" id="message" class="form-control" placeholder="Enter Your Message" rows="4"></textarea>
            </div>
            <div class="text-center"><button class="btn btn-danger mt-2" name="submit" type="submit">Send Message</button></div>
        </form> 
          </div>

        </div>

      </div>
      <?php endforeach ?>
    </section><!-- End Contact Me Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  <?php 

$query = mysqli_query($conn, "SELECT * FROM about");
$about = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($about as $row) : ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        <h2>About Us</h2>
        <?php 

$query = mysqli_query($conn, "SELECT * FROM home");
$home = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($home as $logo) : ?>
      <h3><?= $logo['home_title'];?></h3>
      <?php endforeach ?>
      <?php 

$query = mysqli_query($conn, "SELECT * FROM about");
$abouts = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($abouts as $foot) : ?>
      <p><?= $foot['about_desc'];?></p>
      <?php endforeach ?>
      <div class="social-links">
      <?php 

$query = mysqli_query($conn, "SELECT * FROM contact_us");
$social = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($social as $links) : ?>
        <a href="<?= $links['link1'];?>" class="twitter"><i class="bx bxl-<?= $links['link_name1'];?>"></i></a>
        <a href="<?= $links['link2'];?>" class="facebook"><i class="bx bxl-<?= $links['link_name2'];?>"></i></a>
        <a href="<?= $links['link3'];?>" class="instagram"><i class="bx bxl-<?= $links['link_name3'];?>"></i></a>
        <a href="<?= $links['link4'];?>" class="google-plus"><i class="bx bxl-<?= $links['link_name4'];?>"></i></a>
        <?php endforeach ?>
      </div>
        </div>
        <div class="col-lg-6">
        <video controls autoplay width="400px">
								<source src="assets/video/mugen.mp4" type="video/mp4" />
							</video>
        </div>
      </div>
      <div class="copyright">
      <?php 

$query = mysqli_query($conn, "SELECT * FROM home");
$copy = mysqli_fetch_all($query, MYSQLI_ASSOC);
  

?>
<?php foreach($copy as $copyright) : ?>
        &copy; Copyright <strong><span><?= $copyright['home_title'];?></span></strong>. All Rights Reserved
        <?php endforeach ?>
      </div>
      <!-- <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
    <?php endforeach ?>
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