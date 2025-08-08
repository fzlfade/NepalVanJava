<?php
session_start();

// Proteksi akses
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
  header("Location: /auth/login.php");
  exit();
}

require '../config/koneksi.php';

if (!isset($_SESSION['username'])) {
  $user_id = $_SESSION['user_id'];
  $stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
  $stmt->bind_param("i", $user_id);
  $stmt->execute();
  $stmt->bind_result($username);
  $stmt->fetch();
  $stmt->close();
  $_SESSION['username'] = $username ?: 'Admin';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - NepalVanJava</title>
  
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon" />
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <!-- Bootstrap CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../assets/css/admin.css?v=1.0" rel="stylesheet">
</head>

<body>
  <!-- Include Sidebar -->
  <?php include 'includes/sidebar.php'; ?>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Topbar -->
    <div class="topbar">
      <div class="topbar-menu">
        <button class="sidebar-toggle" id="sidebarToggle">
          <i class="bi bi-list"></i>
        </button>
        
        <div class="user-menu">
          <button class="user-btn" data-bs-toggle="modal" data-bs-target="#userMenuModal">
            <i class="bi bi-person-circle me-2"></i>
            <?php echo htmlspecialchars($_SESSION['username']); ?>
          </button>
        </div>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container-fluid py-4">
      <!-- Welcome Section -->
      <div class="row mb-4">
        <div class="col-12">
          <div class="card dashboard-card">
            <div class="card-body text-center py-5">
              <h2 class="mb-3">Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
              <p class="lead">Anda login sebagai Administrator Nepal Van Java</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Access Cards -->
      <div class="row">
        <!-- Profile -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="profile.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-person-circle"></i>
                </div>
                <h5>Profile</h5>
                <p class="text-muted">Kelola profil admin</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Spot Wisata -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="spot-wisata.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-image"></i>
                </div>
                <h5>Spot Wisata</h5>
                <p class="text-muted">Kelola destinasi wisata</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Paket Wisata -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="paket-wisata.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-signpost-split"></i>
                </div>
                <h5>Paket Wisata</h5>
                <p class="text-muted">Kelola paket perjalanan</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Fasilitas Pendukung -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="fasilitas.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-tools"></i>
                </div>
                <h5>Fasilitas</h5>
                <p class="text-muted">Kelola fasilitas pendukung</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Penginapan -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="penginapan.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-house-door"></i>
                </div>
                <h5>Penginapan</h5>
                <p class="text-muted">Kelola tempat menginap</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Kuliner -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="kuliner.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-egg-fried"></i>
                </div>
                <h5>Kuliner</h5>
                <p class="text-muted">Kelola makanan & minuman</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Aksesibilitas -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="aksesibilitas.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-map"></i>
                </div>
                <h5>Aksesibilitas</h5>
                <p class="text-muted">Kelola akses & transportasi</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Kontak -->
        <div class="col-md-6 col-lg-3 mb-4">
          <a href="kontak.php" class="text-decoration-none">
            <div class="card dashboard-card">
              <div class="card-body text-center py-4">
                <div class="card-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <h5>Kontak</h5>
                <p class="text-muted">Kelola informasi kontak</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center">
            <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> Nepal Van Java - Admin Panel</p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- User Menu Modal -->
  <?php include 'includes/modal-akun.php'; ?>

  <!-- Bootstrap JS -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script>
    // Toggle sidebar on mobile
    document.getElementById('sidebarToggle').addEventListener('click', function() {
      document.getElementById('sidebar').classList.toggle('show');
    });

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
      const sidebar = document.getElementById('sidebar');
      const sidebarToggle = document.getElementById('sidebarToggle');
      
      if (window.innerWidth <= 992 && 
          !sidebar.contains(event.target) && 
          event.target !== sidebarToggle && 
          !sidebarToggle.contains(event.target)) {
        sidebar.classList.remove('show');
      }
    });
  </script>
</body>
</html>