<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_slider = $_POST['id_slider'];
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    
    try {
        // Jika ada file gambar baru diupload
        if (!empty($_FILES['gambar']['name'])) {
            $targetDir = "../../uploads/sliders/";
            $fileName = uniqid() . '_' . basename($_FILES['gambar']['name']);
            $targetFile = $targetDir . $fileName;
            
            // Hapus gambar lama
            $stmt = $pdo->prepare("SELECT gambar FROM sliders WHERE id_slider = ?");
            $stmt->execute([$id_slider]);
            $oldImage = $stmt->fetchColumn();
            
            if (file_exists($targetDir . $oldImage)) {
                unlink($targetDir . $oldImage);
            }
            
            // Upload gambar baru
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
                $stmt = $pdo->prepare("UPDATE sliders SET judul = ?, subjudul = ?, gambar = ? WHERE id_slider = ?");
                $stmt->execute([$judul, $subjudul, $fileName, $id_slider]);
            } else {
                $_SESSION['error'] = "Gagal mengupload gambar";
                header("Location: ../profile.php");
                exit();
            }
        } else {
            // Update tanpa mengubah gambar
            $stmt = $pdo->prepare("UPDATE sliders SET judul = ?, subjudul = ? WHERE id_slider = ?");
            $stmt->execute([$judul, $subjudul, $id_slider]);
        }
        
        $_SESSION['success'] = "Slider berhasil diperbarui";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Gagal memperbarui slider: " . $e->getMessage();
    }
    
    header("Location: ../profile.php");
    exit();
}
?>