<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Nepal Van Java</title>

    <!-- Favicons -->
    <link href="/public_html/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/public_html/assets/img/favicon.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/public_html/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/public_html/assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <h2>Login</h2>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;"><?= htmlspecialchars($_GET['error']) ?></p>
    <?php endif; ?>

    <form method="POST" action="action/login-action.php">
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <p class="signup-link">
        Belum punya akun? <a href="register.php">Daftar di sini</a>
    </p>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/public_html/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/public_html/assets/vendor/php-email-form/validate.js"></script>
    <script src="/public_html/assets/vendor/aos/aos.js"></script>
    <script src="/public_html/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/public_html/assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Main JS File -->
    <script src="/public_html/assets/js/auth.js"></script>
</body>

</html>