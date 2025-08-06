<?php
session_start();

// Proteksi akses: hanya admin yang boleh masuk
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
  header("Location: /auth/login.php");
  exit();
}

// Include koneksi DB
require '../db/config.php';

// Cek apakah username belum ada di session, lalu ambil dari database
if (!isset($_SESSION['username'])) {
  $user_id = $_SESSION['user_id'];

  $stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
  $stmt->bind_param("i", $user_id);
  $stmt->execute();
  $stmt->bind_result($username);
  $stmt->fetch();
  $stmt->close();

  if ($username) {
    $_SESSION['username'] = $username;
  } else {
    $_SESSION['username'] = 'User';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Admin Dashboard - NepalVanJava</title>

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon" />
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts & CSS -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Marcellus&display=swap" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../assets/css/admin.css" rel="stylesheet" />
</head>

<body>

  <!-- Header -->
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <h1><i class="bi bi-gear" style="font-size: 32px;"></i></h1>
      </a>

      <!-- Nav menu -->
      <nav id="navmenu" class="navmenu d-flex align-items-center">
        <ul class="me-3">
          <li><a href="dashboard.php" class="active">Dashboard</a></li>
          <li><a href="kelola-paket.php">Kelola Paket</a></li>
          <li><a href="kelola-fasilitas.php">Kelola Fasilitas</a></li>
          <li><a href="kelola-homestay.php">Kelola Homestay</a></li>
          <li><a href="kelola-rute.php">Kelola Rute</a></li>
        </ul>

        <!-- Ikon Admin (trigger modal) -->
        <div>
            <button type="button" class="btn btn-light rounded-circle shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#userMenuModal">
                <i class="bi bi-person-circle fs-4 text-success"></i>
            </button>
        </div>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>


  <!-- Main Content -->
  <main id="main" class="main">
    <section class="section hero">
      <div class="container text-center">
        <h2>Selamat Datang, Admin!</h2>
        <p>Gunakan dashboard ini untuk mengelola konten website Nepal Van Java.</p>
      </div>
    </section>

    <section class="admin-grid py-5">
      <div class="container">
        <div class="row g-4">

          <!-- Kelola Paket -->
          <div class="col-md-3 col-sm-6">
            <a href="kelola-paket.php" class="admin-btn text-center">
              <i class="bi bi-signpost-2-fill"></i>
              <h5>Kelola Paket</h5>
              <p>Atur paket wisata dan jadwalnya.</p>
            </a>
          </div>

          <!-- Kelola Fasilitas -->
          <div class="col-md-3 col-sm-6">
            <a href="kelola-fasilitas.php" class="admin-btn text-center">
              <i class="bi bi-tools"></i>
              <h5>Kelola Fasilitas</h5>
              <p>Tambah dan ubah fasilitas umum wisata.</p>
            </a>
          </div>

          <!-- Kelola Homestay -->
          <div class="col-md-3 col-sm-6">
            <a href="kelola-homestay.php" class="admin-btn text-center">
              <i class="bi bi-house-heart-fill"></i>
              <h5>Kelola Homestay</h5>
              <p>Atur penginapan dan harga sewanya.</p>
            </a>
          </div>

          <!-- Kelola Rute -->
          <div class="col-md-3 col-sm-6">
            <a href="kelola-rute.php" class="admin-btn text-center">
              <i class="bi bi-map-fill"></i>
              <h5>Kelola Rute</h5>
              <p>Tambahkan rute dan akses lokasi.</p>
            </a>
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container text-center">
      <p>&copy; <?= date('Y') ?> <strong>Nepal Van Java</strong> - Admin Panel</p>
    </div>
  </footer>

  <?php include '../includes/modal-akun.php'; ?>

  <!-- JS -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>
