<?php
// Konfigurasi folder views
$viewsPath = __DIR__ . '/views/';

// Ambil halaman dari parameter URL
$page = $_GET['page'] ?? 'index'; // default = views/index.php

// Cek apakah file ada di folder views
$file = $viewsPath . $page . '.php';

if (file_exists($file)) {
    include $file;
} else {
    echo "<h1>404 - Halaman '$page' tidak ditemukan</h1>";
}
?>