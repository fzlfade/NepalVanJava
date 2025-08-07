<?php
// sidebar.php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="dashboard.php" class="sidebar-brand d-flex align-items-center justify-content-center">
            <i class="bi bi-gear-fill me-2"></i>
            <span>NepalVanJava Admin</span>
        </a>
    </div>

    <div class="sidebar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?= ($current_page == 'dashboard.php') ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link <?= ($current_page == 'profile.php') ? 'active' : '' ?>">
                    <i class="bi bi-person-circle"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="spot-wisata.php" class="nav-link <?= ($current_page == 'spot-wisata.php') ? 'active' : '' ?>">
                    <i class="bi bi-image"></i>
                    <span>Spot Wisata</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="paket-wisata.php" class="nav-link <?= ($current_page == 'paket-wisata.php') ? 'active' : '' ?>">
                    <i class="bi bi-signpost-split"></i>
                    <span>Paket Wisata</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="fasilitas.php" class="nav-link <?= ($current_page == 'fasilitas.php') ? 'active' : '' ?>">
                    <i class="bi bi-tools"></i>
                    <span>Fasilitas Pendukung</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="penginapan.php" class="nav-link <?= ($current_page == 'penginapan.php') ? 'active' : '' ?>">
                    <i class="bi bi-house-door"></i>
                    <span>Penginapan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="kuliner.php" class="nav-link <?= ($current_page == 'kuliner.php') ? 'active' : '' ?>">
                    <i class="bi bi-egg-fried"></i>
                    <span>Kuliner</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="aksesibilitas.php" class="nav-link <?= ($current_page == 'aksesibilitas.php') ? 'active' : '' ?>">
                    <i class="bi bi-map"></i>
                    <span>Aksesibilitas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="kontak.php" class="nav-link <?= ($current_page == 'kontak.php') ? 'active' : '' ?>">
                    <i class="bi bi-telephone"></i>
                    <span>Kontak</span>
                </a>
            </li>
        </ul>
    </div>
</div>