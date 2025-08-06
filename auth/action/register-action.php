<?php
require '../../db/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah username sudah dipakai
    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "Username sudah digunakan. Silakan pilih yang lain.";
        exit();
    }

    // Insert data
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $phone, $password);

    if ($stmt->execute()) {
        header("Location: ../login.php?success=1");
        exit();
    } else {
        echo "Gagal: " . $stmt->error;
    }
}
?>