<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $subjudul = $_POST['subjudul'];
    
    // Debug informasi upload
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
    $targetDir = "../../uploads/sliders/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    
    $fileName = uniqid() . '_' . basename($_FILES['gambar']['name']);
    $targetFile = $targetDir . $fileName;
    
    // Debug path
    echo "Target file: " . $targetFile . "<br>";
    
    // Cek error upload
    if ($_FILES['gambar']['error'] !== UPLOAD_ERR_OK) {
        $_SESSION['error'] = "Error upload: " . $_FILES['gambar']['error'];
        header("Location: ../profile.php");
        exit();
    }
    
    // Cek ekstensi file
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    
    if (!in_array($imageFileType, $allowedExtensions)) {
        $_SESSION['error'] = "Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan";
        header("Location: ../profile.php");
        exit();
    }
    
    // Cek ukuran file (max 5MB)
    if ($_FILES['gambar']['size'] > 5000000) {
        $_SESSION['error'] = "Ukuran file terlalu besar (max 5MB)";
        header("Location: ../profile.php");
        exit();
    }
    
    try {
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
            $stmt = $pdo->prepare("INSERT INTO sliders (judul, subjudul, gambar) VALUES (?, ?, ?)");
            $stmt->execute([$judul, $subjudul, $fileName]);
            
            $_SESSION['success'] = "Slider berhasil ditambahkan";
        } else {
            $error = error_get_last();
            $_SESSION['error'] = "Gagal mengupload gambar: " . $error['message'];
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Gagal menambahkan slider: " . $e->getMessage();
    }
    
    header("Location: ../profile.php");
    exit();
}