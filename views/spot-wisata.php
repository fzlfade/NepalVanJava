<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Spot Wisata-NepalvanJava</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/public_html/assets/img/favicon.png" rel="icon">
  <link href="/public_html/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/public_html/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public_html/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/public_html/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/public_html/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/public_html/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/public_html/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="/public_html/assets/img/logo.png" alt="AgriCulture">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php?page=index" class="active">Profil</a></li>
          <li><a href="index.php?page=spot-wisata">Spot Wisata</a></li>
          <li><a href="index.php?page=services">Paket Wisata</a></li>
          <li><a href="index.php?page=fasilitas-pendukung">Fasilitas Pendukung</a></li>
          <li><a href="index.php?page=homestay">Homestay</a></li>
          <li><a href="index.php?page=kuliner">Kuliner</a></li>
          <li><a href="index.php?page=kuliner">Aksesibilitas dan Rute</a></li>
          <li><a href="index.php?page=kuliner">Wisata Sekitar</a></li>
          <li><a href="index.php?page=contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(/public_html/assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        <h1>Spot Wisata</h1>
        <p>Jelajahi tempat-tempat paling menarik dan fotogenik di Nepal Van Java.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Profil</a></li>
            <li class="current">Spot Wisata</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="/public_html/assets/img/nepal.jpg" alt="Image" class="img-fluid">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span>
            </a>
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">Pengalaman yang Tak Sekadar Liburan</h2>
            <p class="mb-4">
              Di Nepal Van Java, Anda tidak hanya menikmati keindahan alam, tapi juga menyatu dengan budaya dan kehidupan masyarakat lereng Gunung Sumbing. 
              Sebuah perpaduan antara keindahan visual dan kehangatan lokal yang sulit dilupakan.
            </p>
            <ul class="list-unstyled list-check">
              <li>Menginap di homestay warga yang nyaman dan bersih</li>
              <li>Jelajah alam: trekking, sunrise hunting, hingga camping</li>
              <li>Cicipi kuliner khas pegunungan yang menggoda</li>
            </ul>

            <p><a href="/public_html/contact.php" class="btn-cta">Hubungi Kami</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section dark-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Spot Wisata</h2>
        <p>Jelajahi tempat-tempat paling menarik dan fotogenik di Nepal Van Java.</p>
      </div><!-- End Section Title -->

      <div class="services-carousel-wrap">
        <div class="container">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 40
                  }
                }
              }
            </script>
            <button class="navigation-prev js-custom-prev">
              <i class="bi bi-arrow-left-short"></i>
            </button>
            <button class="navigation-next js-custom-next">
              <i class="bi bi-arrow-right-short"></i>
            </button>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="service-item">
                  <div class="service-item-contents">
                    <a href="#">
                      <span class="service-item-category">Spot 1</span>
                      <h2 class="service-item-title">Silancur Highland</h2>
                    </a>
                  </div>
                  <img src="/public_html/assets/img/silancur.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-item">
                  <div class="service-item-contents">
                    <a href="#">
                      <span class="service-item-category">Spot 2</span>
                      <h2 class="service-item-title">Mangli Skyview</h2>
                    </a>
                  </div>
                  <img src="/public_html/assets/img/mangli.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-item">
                  <div class="service-item-contents">
                    <a href="#">
                      <span class="service-item-category">Spot 3</span>
                      <h2 class="service-item-title">Curug Silawe</h2>
                    </a>
                  </div>
                  <img src="/public_html/assets/img/curug.jpg" alt="Image" class="img-fluid">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="service-item">
                  <div class="service-item-contents">
                    <a href="#">
                      <span class="service-item-category">Spot 4</span>
                      <h2 class="service-item-title">Candi Selogriyo</h2>
                    </a>
                  </div>
                  <img src="/public_html/assets/img/candi.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-item">
                  <div class="service-item-contents">
                    <a href="#">
                      <span class="service-item-category">Spot 5</span>
                      <h2 class="service-item-title">Gunung Sumbing</h2>
                    </a>
                  </div>
                  <img src="/public_html/assets/img/sumbing.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-item">
                  <div class="service-item-contents">
                    <a href="#">
                      <span class="service-item-category">Spot 6</span>
                      <h2 class="service-item-title">Dataran Tinggi Sukomakmur</h2>
                    </a>
                  </div>
                  <img src="/public_html/assets/img/Nepal-from-Java.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="/public_html/index.php" class="logo d-flex align-items-center">
              <span class="sitename">AgriCulture</span>
            </a>
            <div class="footer-contact pt-3">
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="/public_html/index.php">Home</a></li>
              <li><a href="spot-wisata.php">Spot Wisata</a></li>
              <li><a href="/public_html/services.php">Paket Wisata</a></li>
              <li><a href="/public_html/fasilitas-pendukung.php">Fasilitas Pendukung</a></li>
              <li><a href="/public_html/homestay.php">Homestay</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Trekking Guide</a></li>
              <li><a href="#">Homestay Booking</a></li>
              <li><a href="#">Transportation</a></li>
              <li><a href="#">Tour Packages</a></li>
              <li><a href="#">Local Food</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Contact Info</h4>
            <ul>
              <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
              <li><a href="mailto:info@nepalvanjava.com">info@nepalvanjava.com</a></li>
              <li><a href="#">Desa Butuh, Kecamatan Kajoran</a></li>
              <li><a href="#">Kabupaten Magelang</a></li>
              <li><a href="#">Jawa Tengah</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Social Media</h4>
            <ul>
              <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
              <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
              <li><a href="#"><i class="bi bi-youtube"></i> YouTube</a></li>
              <li><a href="#"><i class="bi bi-tiktok"></i> TikTok</a></li>
              <li><a href="#"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>Nepal van Java</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/public_html/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/public_html/assets/vendor/php-email-form/validate.js"></script>
  <script src="/public_html/assets/vendor/aos/aos.js"></script>
  <script src="/public_html/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/public_html/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="/public_html/assets/js/main.js"></script>

</body>

</html>