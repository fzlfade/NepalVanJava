<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NepalvanJava</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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
    <style>
        :root {
            --default-font: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --heading-font: "Marcellus", sans-serif;
            --nav-font: "Marcellus", sans-serif;
        }

        nav a {
            text-decoration: none;
            color: var(--text);
        }

        .header {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 20px 0;
            transition: all 0.5s;
            z-index: 997;
        }

        .header .logo {
            line-height: 1;
        }

        .header .logo img {
            max-height: 32px;
            margin-right: 8px;
        }

        .header .logo h1 {
            font-size: 30px;
            margin: 0;
            font-weight: 700;
            color: var(--heading-color);
        }

        .scrolled .header {
            box-shadow: 0px 0 18px color-mix(in srgb, var(--default-color), transparent 85%);
        }

        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /* Navmenu - Desktop */
        @media (min-width: 1200px) {
            .navmenu {
                padding: 0;
            }

            .navmenu ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }

            .navmenu li {
                position: relative;
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-color);
                padding: 18px 15px;
                font-size: 16px;
                font-family: var(--nav-font);
                font-weight: 400;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }

            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                transition: 0.3s;
            }

            .navmenu li:last-child a {
                padding-right: 0;
            }

            .navmenu li:hover>a,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-hover-color);
            }

            .navmenu .dropdown ul {
                margin: 0;
                padding: 10px 0;
                background: var(--nav-dropdown-background-color);
                display: block;
                position: absolute;
                visibility: hidden;
                left: 14px;
                top: 130%;
                opacity: 0;
                transition: 0.3s;
                border-radius: 4px;
                z-index: 99;
                box-shadow: 0px 0px 30px color-mix(in srgb, var(--default-color), transparent 85%);
            }

            .navmenu .dropdown ul li {
                min-width: 200px;
            }

            .navmenu .dropdown ul a {
                padding: 10px 20px;
                font-size: 15px;
                text-transform: none;
                color: var(--nav-dropdown-color);
            }

            .navmenu .dropdown ul a i {
                font-size: 12px;
            }

            .navmenu .dropdown ul a:hover,
            .navmenu .dropdown ul .active:hover,
            .navmenu .dropdown ul li:hover>a {
                color: var(--nav-dropdown-hover-color);
            }

            .navmenu .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navmenu .dropdown .dropdown ul {
                top: 0;
                left: -90%;
                visibility: hidden;
            }

            .navmenu .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: -100%;
                visibility: visible;
            }
        }

        /* Navmenu - Mobile */
        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--nav-color);
                font-size: 28px;
                line-height: 0;
                margin-right: 10px;
                cursor: pointer;
                transition: color 0.3s;
            }

            .navmenu {
                padding: 0;
                z-index: 9997;
            }

            .navmenu ul {
                display: none;
                list-style: none;
                position: absolute;
                inset: 60px 20px 20px 20px;
                padding: 10px 0;
                margin: 0;
                border-radius: 6px;
                background-color: var(--nav-mobile-background-color);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
                box-shadow: 0px 0px 30px color-mix(in srgb, var(--default-color), transparent 90%);
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-dropdown-color);
                padding: 10px 20px;
                font-family: var(--nav-font);
                font-size: 17px;
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }

            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: 0.3s;
                background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
            }

            .navmenu a i:hover,
            .navmenu a:focus i:hover {
                background-color: var(--accent-color);
                color: var(--contrast-color);
            }

            .navmenu a:hover,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-dropdown-hover-color);
            }

            .navmenu .active i,
            .navmenu .active:focus i {
                background-color: var(--accent-color);
                color: var(--contrast-color);
                transform: rotate(180deg);
            }

            .navmenu .dropdown ul {
                position: static;
                display: none;
                z-index: 99;
                padding: 10px 0;
                margin: 10px 20px;
                background-color: var(--nav-dropdown-background-color);
                border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
                box-shadow: none;
                transition: all 0.5s ease-in-out;
            }

            .navmenu .dropdown ul ul {
                background-color: rgba(33, 37, 41, 0.1);
            }

            .navmenu .dropdown>.dropdown-active {
                display: block;
                background-color: rgba(33, 37, 41, 0.03);
            }

            .mobile-nav-active {
                overflow: hidden;
            }

            .mobile-nav-active .mobile-nav-toggle {
                color: #fff;
                position: absolute;
                font-size: 32px;
                top: 15px;
                right: 15px;
                margin-right: 0;
                z-index: 9999;
            }

            .mobile-nav-active .navmenu {
                position: fixed;
                overflow: hidden;
                inset: 0;
                background: rgba(33, 37, 41, 0.8);
                transition: 0.3s;
            }

            .mobile-nav-active .navmenu>ul {
                display: block;
            }
        }
    </style>

    <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="/public_html/assets/img/logo.png" alt="AgriCulture">
                <!-- <h1 class="sitename">AgriCulture</h1>  -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php?page=index" class="active">Profil</a></li>
                    <li><a href="index.php?page=spot-wisata">Spot Wisata</a></li>
                    <li><a href="index.php?page=services">Paket Wisata</a></li>
                    <li><a href="index.php?page=fasilitas-pendukung">Fasilitas Pendukung</a></li>
                    <li><a href="index.php?page=homestay">Homestay</a></li>
                    <li><a href="index.php?page=kuliner">Kuliner</a></li>
                    <li><a href="index.php?page=kuliner">Aksesibilitas dan Rute</a></li>
                    <li><a href="index.php?page=kuliner">Wisata Sekitar</a></li>
                    <li><a href="index.php?page=contact">Kontak</a></li>
                    <div>
                        <button type="button" class="btn btn-light rounded-circle shadow-sm border-0"
                            data-bs-toggle="modal" data-bs-target="#userMenuModal">
                            <i class="bi bi-person-circle fs-4 text-success"></i>
                        </button>
                    </div>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">