<?php
session_start();
require '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_event = $_POST['id_event'];
    
    try {
        $stmt = $pdo->prepare("DELETE FROM calendar_events WHERE id_event = ?");
        $stmt->execute([$id_event]);
        
        $_SESSION['success'] = "Event berhasil dihapus";
    } catch (PDOException $e) {
        $_SESSION['error'] = "Gagal menghapus event: " . $e->getMessage();
    }
    
    header("Location: ../profile.php");
    exit();
}
?>