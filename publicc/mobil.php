<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Get A Quote - Logis Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Apr 08 2026 with Bootstrap v5.3.8
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="get-a-quote-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">RENTALKU</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home<br></a></li>
          <li><a href="mobil.php" class="active">Mobil</a></li>
          <li><a href="motor.php">Motor</a></li>
          <li><a href="layanan.php">Layanan</a></li>
          <li><a href="sewa.php">Cara Sewa</a></li>
          <li><a href="booking.php">Cek Booking</a></li>
           <li><a href="blog.php">Blog</a></li>

          <li><a href="kontak.php">Kontak</a></li>
          <a href="auth/login.php" class="btn btn-outline-secondary rounded-pill py-2">
            Login
          </a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <label class="btn-getstarted theme-switch">
        <input type="checkbox" id="darkModeToggle">
        <span class="theme-slider"></span>
      </label>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Get a Quote</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Get A Quote</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Get A Quote Section -->
    <section id="get-a-quote" class="get-a-quote section">

      <div class="container">

        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/get-a-quote.php" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>

              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="departure" class="form-control" placeholder="City of Departure" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="delivery" class="form-control" placeholder="Delivery City" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required="">
                </div>

                <div class="col-lg-12">
                  <h4>Your Personal Details</h4>
                </div>

                <div class="col-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required="">
                </div>

                <div class="col-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>

    </section><!-- /Get A Quote Section -->

  </main>
<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <span class="sitename">Rental Mobil & Motor</span>
          </a>
          <p>Mau ke mana hari ini? 🚗🏍️ Mau jalan santai, cari cuan, atau healing tipis-tipis? Pilih kendaraanmu,
            booking, dan gaskeun! Perjalanan nyaman, urusan gampang..</p>
         <div class="social-links d-flex mt-5">
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""><i class="bi bi-tiktok"></i></a>
            <a href=""><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Navigasi</h4>
          <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="mobil.php">Sewa Mobil</a></li>
            <li><a href="motor.php">Sewa Motor</a></li>
            <li><a href="layanan.php">layanan</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Informasi</h4>
          <ul>
            <li><a href="sewa.php">Cara Sewa</a></li>
            <li><a href="booking.php">Cek Booking</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="kontak.php">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi </h4>
          <p>Rental Mobil & Motor</p>
          <p>Medan, Pulo Brayan No. 52</p>
          <p>Sumatera Utara, Indonesia</p>
          <p class="mt-4"><strong>Phone :</strong> <span>085362102165</span></p>
          <p><strong>Email :</strong> <span>rentalku@gmail.com</span></p>
        </div>

      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Rentalku</strong> <span>All Rights Reserved</span></p>
     
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
<?php include 'pereload.php' ; ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</php>