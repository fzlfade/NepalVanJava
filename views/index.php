<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>NepalvanJava</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/public_html/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="/public_html/assets/img/favicon.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
    rel="stylesheet">

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

<body class="index-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/public_html/assets/img/logo.png" alt="AgriCulture">
        <!-- <h1 class="sitename">AgriCulture</h1>  -->
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
          <div>
            <button type="button" class="btn btn-light rounded-circle shadow-sm border-0" data-bs-toggle="modal"
              data-bs-target="#userMenuModal">
              <i class="bi bi-person-circle fs-4 text-success"></i>
            </button>
          </div>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>



    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="/public_html/assets/img/mangli.jpg" alt="">
          <div class="carousel-container">
            <h2>Selamat Datang di Nepal van Java</h2>
            <p>Desa wisata di lereng Gunung Sumbing dengan pemandangan bak pegunungan Himalaya.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="/public_html/assets/img/silancur.jpg" alt="">
          <div class="carousel-container">
            <h2>Suasana Pagi yang Sejuk</h2>
            <p>Diselimuti kabut tipis dan langit cerah.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="/public_html/assets/img/sumbing.jpg" alt="">
          <div class="carousel-container">
            <h2>Aktivitas Masyarakat</h2>
            <p>Warga berbaur dengan alam dan wisatawan.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="/public_html/assets/img/curug.jpg" alt="">
          <div class="carousel-container">
            <h2>Desa Butuh dari Ketinggian</h2>
            <p>Rumah-rumah berjajar di lereng Gunung Sumbing.</p>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="/public_html/assets/img/candi.jpg" alt="">
          <div class="carousel-container">
            <h2>Pemandangan Menjelang Senja</h2>
            <p>Siluet gunung dan lampu rumah yang menyala.</p>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section class="services section" id="services">
      <div class="container">

        <!-- Section Title -->
        <div class="section-title text-center mb-4" data-aos="fade-up">
          <h6 class="text-success">Fasilitas Pendukung</h6>
          <h2>Berbagai pengalaman wisata menarik yang kami sediakan untuk Anda</h2>
        </div>

        <!-- Grid Items -->
        <div class="row g-4">

          <!-- Looping Items -->
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-signpost-2-fill display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Trekking Gunung</h5>
                <p class="mb-0 small">Nikmati jalur pendakian ringan hingga sunrise point.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-camera-fill display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Spot Foto Instagramable</h5>
                <p class="mb-0 small">Banyak lokasi foto estetik dengan latar pegunungan.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-house-heart-fill display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Homestay Nyaman</h5>
                <p class="mb-0 small">Penginapan lokal bersih dan ramah untuk istirahat Anda.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-cup-hot-fill display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Kuliner Tradisional</h5>
                <p class="mb-0 small">Cicipi makanan khas seperti tempe kemul dan kopi lereng gunung.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-mortarboard display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Wisata Edukasi Pertanian</h5>
                <p class="mb-0 small">Belajar menanam dan memanen sayuran bersama warga.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-map-fill display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Camping Area</h5>
                <p class="mb-0 small">Area camping aman untuk keluarga dan komunitas.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-truck-front display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Sewa Jeep / Ojek Wisata</h5>
                <p class="mb-0 small">Jelajahi desa dengan kendaraan lokal yang disediakan.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="450">
            <div class="service-item text-center p-4 border h-100">
              <div class="service-item-icon mb-3">
                <i class="bi bi-basket-fill display-4 text-success"></i>
              </div>
              <div class="service-item-content">
                <h5 class="mb-2">Pusat Oleh-Oleh</h5>
                <p class="mb-0 small">Belanja hasil bumi dan kerajinan tangan khas lokal.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="/public_html/assets/img/nepal.jpg" alt="Image " class="img-fluid img-overlap"
                data-aos="zoom-out">
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">Kenapa memilih Nepal van Java?</h3>
              <h2 class="content-title mb-4">
                Lebih dari sekadar <strong>destinasi wisata</strong>, ini adalah pengalaman hidup
              </h2>
              <p class="opacity-50">
                Nikmati udara sejuk pegunungan, lanskap spektakuler di kaki Gunung Sumbing, dan kehangatan budaya lokal
                yang autentik.
                Nepal Van Java adalah pilihan sempurna bagi pencari ketenangan, petualangan, dan keindahan alam dalam
                satu tempat.
              </p>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-tree-fill me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Dekat dengan alam</h4>
                    <p class="text-white opacity-50">Bangun pagi dengan pemandangan pegunungan dan suara alam yang
                      menenangkan.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-people-fill me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Disambut Seperti Keluarga</h4>
                    <p class="text-white opacity-50">Warga desa menyambut Anda bukan sebagai tamu, tapi sebagai saudara.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-cup-hot-fill me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Kuliner Khas Pegunungan</h4>
                    <p class="text-white opacity-50">Rasakan cita rasa otentik masakan rumahan dari hasil bumi lokal.
                    </p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-house-heart-fill me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Homestay Nyaman & Terjangkau</h4>
                    <p class="text-white opacity-50">Tidur nyenyak di rumah-rumah tradisional dengan nuansa hangat dan
                      bersih.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

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
              Di Nepal Van Java, Anda tidak hanya menikmati keindahan alam, tapi juga menyatu dengan budaya dan
              kehidupan masyarakat lereng Gunung Sumbing.
              Sebuah perpaduan antara keindahan visual dan kehangatan lokal yang sulit dilupakan.
            </p>
            <ul class="list-unstyled list-check">
              <li>Menginap di homestay warga yang nyaman dan bersih</li>
              <li>Jelajah alam: trekking, sunrise hunting, hingga camping</li>
              <li>Cicipi kuliner khas pegunungan yang menggoda</li>
            </ul>

            <p><a href="contact.php" class="btn-cta">Hubungi Kami</a></p>
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
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section class="testimonials-12 testimonials section" id="testimonials">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Apa Kata Mereka?</h2>
        <p>Pendapat para pengunjung tentang pengalaman mereka di Nepal Van Java</p>
      </div><!-- End Section Title -->

      <div class="testimonial-wrap">
        <div class="container">
          <div class="row">

            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="/public_html/assets/img/testimonials/testimonials-3.jpg" alt="Sinta Rahayu">
                <blockquote>
                  <p>
                    “Pemandangan di pagi hari benar-benar luar biasa. Rasanya seperti sedang berada di luar negeri. Tapi
                    yang paling berkesan adalah keramahan warga desanya.”
                  </p>
                </blockquote>
                <p class="client-name">SINTA RAHAYU – Jakarta</p>
              </div>
            </div>

            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="/public_html/assets/img/testimonials/testimonials-1.jpg" alt="Arif Maulana">
                <blockquote>
                  <p>
                    “Homestay-nya bersih dan nyaman. Saya bisa ngobrol langsung dengan tuan rumah tentang tradisi dan
                    kehidupan sehari-hari mereka. Serasa di rumah sendiri.”
                  </p>
                </blockquote>
                <p class="client-name">ARIF MAULANA – Bandung</p>
              </div>
            </div>

            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="/public_html/assets/img/testimonials/testimonials-2.jpg" alt="Claire Tan">
                <blockquote>
                  <p>
                    “Saya dan keluarga sangat menikmati trekking pagi ke sunrise point. Kami disuguhi sarapan khas desa
                    yang nikmat. Anak-anak pun senang!”
                  </p>
                </blockquote>
                <p class="client-name">CLAIRE TAN – Singapura</p>
              </div>
            </div>

            <div class="col-md-6 mb-4 mb-md-4">
              <div class="testimonial">
                <img src="/public_html/assets/img/testimonials/testimonials-4.jpg" alt="Dedi Santoso">
                <blockquote>
                  <p>
                    “Bisa ikut panen sayur bersama warga jadi pengalaman paling berharga buat saya. Nepal Van Java bikin
                    saya ingin kembali lagi.”
                  </p>
                </blockquote>
                <p class="client-name">DEDI SANTOSO – Yogyakarta</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.php" class="logo d-flex align-items-center">
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
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
              href="https://themewagon.com">ThemeWagon</a>
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
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/public_html/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/public_html/assets/vendor/php-email-form/validate.js"></script>
  <script src="/public_html/assets/vendor/aos/aos.js"></script>
  <script src="/public_html/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/public_html/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <?php include 'includes/modal-akun.php'; ?>

  <!-- Main JS File -->
  <script src="/public_html/assets/js/main.js"></script>

</body>

</html>