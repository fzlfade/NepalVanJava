<?php
session_start();
require '../../db/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();

        if (password_verify($pass, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role']    = $user['role'];

            if ($user['role'] === 'admin') {
                header("Location: /public_html/admin/dashboard.php");
            } else {
                header("Location: /public_html/views/index.php");
            }
            exit();
        }
    }

    // Jika gagal login
    header("Location: ../login.php?error=" . urlencode("Email atau password salah."));
    exit();
}
