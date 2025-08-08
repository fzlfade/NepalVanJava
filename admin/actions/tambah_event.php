<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input
    if (empty($_POST['event_date']) || empty($_POST['event_title'])) {
        $_SESSION['error'] = "Tanggal dan judul event harus diisi";
        header("Location: ../profile.php");
        exit();
    }

    $event_date = $_POST['event_date'];
    $event_title = $_POST['event_title'];
    $event_description = $_POST['event_description'] ?? null;
    $event_color = $_POST['event_color'] ?? '#FF0000';
    $is_holiday = isset($_POST['is_holiday']) ? 1 : 0;
    
    try {
        $stmt = $pdo->prepare("INSERT INTO calendar_events 
                              (event_date, event_title, event_description, event_color, is_holiday) 
                              VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$event_date, $event_title, $event_description, $event_color, $is_holiday]);
        
        $_SESSION['success'] = "Event berhasil ditambahkan";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Gagal menambahkan event: " . $e->getMessage();
    }
    
    header("Location: ../profile.php");
    exit();
}
?>