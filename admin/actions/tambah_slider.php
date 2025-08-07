<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    
    // Upload gambar
    $targetDir = "../../uploads/sliders/";
    $fileName = uniqid() . '_' . basename($_FILES['gambar']['name']);
    $targetFile = $targetDir . $fileName;
    
    try {
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
            $stmt = $pdo->prepare("INSERT INTO sliders (judul, subjudul, gambar) VALUES (?, ?, ?)");
            $stmt->execute([$judul, $subjudul, $fileName]);
            
            $_SESSION['success'] = "Slider berhasil ditambahkan";
        } else {
            $_SESSION['error'] = "Gagal mengupload gambar";
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Gagal menambahkan slider: " . $e->getMessage();
    }
    
    header("Location: ../profile.php");
    exit();
}
?>