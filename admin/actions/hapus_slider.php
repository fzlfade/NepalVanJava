<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_slider = $_POST['id_slider'];
    
    try {
        // Hapus gambar dari server
        $stmt = $pdo->prepare("SELECT gambar FROM sliders WHERE id_slider = ?");
        $stmt->execute([$id_slider]);
        $gambar = $stmt->fetchColumn();
        
        $targetDir = "../../uploads/sliders/";
        if (file_exists($targetDir . $gambar)) {
            unlink($targetDir . $gambar);
        }
        
        // Hapus dari database
        $stmt = $pdo->prepare("DELETE FROM sliders WHERE id_slider = ?");
        $stmt->execute([$id_slider]);
        
        $_SESSION['success'] = "Slider berhasil dihapus";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Gagal menghapus slider: " . $e->getMessage();
    }
    
    header("Location: ../profile.php");
    exit();
}
?>