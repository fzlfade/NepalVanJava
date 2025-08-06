<?php
$host = 'localhost';
$db   = 'db_wisata';
$user = 'root';
$pass = '';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // echo "Koneksi berhasil!";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
