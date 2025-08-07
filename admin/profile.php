<?php
session_start();

// Proteksi akses
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

require '../config/koneksi.php';

// Ambil data slider dari database
try {
    $stmt = $pdo->query("SELECT * FROM sliders ORDER BY id_slider DESC");
    $sliders = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $_SESSION['error'] = "Gagal mengambil data slider: " . $e->getMessage();
    $sliders = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Slider Utama - Admin NepalVanJava</title>
    
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/admin.css" rel="stylesheet">
    
    <style>
        .slider-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .slider-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .slider-img {
            height: 300px;
            object-fit: cover;
            width: 100%;
        }
        
        .slider-body {
            padding: 20px;
            background: white;
        }
        
        .action-buttons {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        
        .btn-action {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <!-- Include Sidebar -->
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <?php include 'includes/topbar.php'; ?>

        <!-- Page Content -->
        <div class="container-fluid py-4">
            <!-- Notifikasi -->
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['success'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['error'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Kelola Slider Utama</h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahSliderModal">
                    <i class="bi bi-plus-circle"></i> Tambah Slider
                </button>
            </div>

            <!-- Slider List -->
            <div class="row">
                <?php if (empty($sliders)): ?>
                    <div class="col-12">
                        <div class="alert alert-info">
                            Belum ada slider yang ditambahkan.
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($sliders as $slider): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="slider-card position-relative">
                                <img src="../uploads/sliders/<?= htmlspecialchars($slider['gambar']) ?>" 
                                     alt="<?= htmlspecialchars($slider['judul']) ?>" 
                                     class="slider-img">
                                     
                                <div class="action-buttons">
                                    <button class="btn btn-success btn-action rounded-circle" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editSliderModal"
                                            data-id="<?= $slider['id_slider'] ?>"
                                            data-judul="<?= htmlspecialchars($slider['judul']) ?>"
                                            data-subjudul="<?= htmlspecialchars($slider['subjudul']) ?>">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger btn-action rounded-circle" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#hapusSliderModal"
                                            data-id="<?= $slider['id_slider'] ?>">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                                
                                <div class="slider-body">
                                    <h4><?= htmlspecialchars($slider['judul']) ?></h4>
                                    <p class="text-muted"><?= htmlspecialchars($slider['subjudul']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
    </div>

    <!-- Modal Tambah Slider -->
    <div class="modal fade" id="tambahSliderModal" tabindex="-1" aria-labelledby="tambahSliderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="actions/tambah_slider.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahSliderModalLabel">Tambah Slider Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="subjudul" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" id="subjudul" name="subjudul" required>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Slider</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                            <small class="text-muted">Ukuran rekomendasi: 1920x1080 px</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Slider -->
    <div class="modal fade" id="editSliderModal" tabindex="-1" aria-labelledby="editSliderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="actions/edit_slider.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="edit_id" name="id_slider">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSliderModalLabel">Edit Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="edit_judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_subjudul" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" id="edit_subjudul" name="subjudul" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_gambar" class="form-label">Gambar Slider (Biarkan kosong jika tidak ingin mengubah)</label>
                            <input type="file" class="form-control" id="edit_gambar" name="gambar" accept="image/*">
                            <small class="text-muted">Ukuran rekomendasi: 1920x1080 px</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Slider -->
    <div class="modal fade" id="hapusSliderModal" tabindex="-1" aria-labelledby="hapusSliderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="actions/hapus_slider.php" method="POST">
                    <input type="hidden" id="hapus_id" name="id_slider">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusSliderModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus slider ini?</p>
                        <p class="text-danger">Aksi ini tidak dapat dibatalkan!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Inisialisasi modal edit
        document.addEventListener('DOMContentLoaded', function() {
            var editModal = document.getElementById('editSliderModal');
            editModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                var judul = button.getAttribute('data-judul');
                var subjudul = button.getAttribute('data-subjudul');
                
                document.getElementById('edit_id').value = id;
                document.getElementById('edit_judul').value = judul;
                document.getElementById('edit_subjudul').value = subjudul;
            });
            
            // Inisialisasi modal hapus
            var hapusModal = document.getElementById('hapusSliderModal');
            hapusModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                document.getElementById('hapus_id').value = id;
            });
        });
    </script>
</body>
</html>