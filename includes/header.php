<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NepalvanJava</title>
    <meta name="description" content="Desa Wisata Nepal van Java di lereng Gunung Sumbing">
    <meta name="keywords" content="wisata, nepal van java, gunung sumbing, homestay, trekking">

    <!-- Favicons -->
    <link href="/public_html/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/public_html/assets/img/favicon.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="/public_html/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/public_html/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --default-color: #212529;
            --heading-color: #2d465e;
            --accent-color: #116530;
            --contrast-color: #ffffff;
            --background-color: #ffffff;
            --nav-color: #212529;
            --nav-hover-color: #116530;
            --nav-dropdown-color: #212529;
            --nav-dropdown-hover-color: #116530;
            --nav-mobile-background-color: #ffffff;
            --nav-dropdown-background-color: #ffffff;
            --nav-font: "Marcellus", sans-serif;
        }

        /* Global Header */
        .header {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 20px 0;
            transition: all 0.5s;
            z-index: 997;
            position: fixed;
            width: 100%;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0px 0 18px rgba(33, 37, 41, 0.15);
        }

        /* Navigation Menu - Desktop */
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
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.15);
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

        /* Mobile Navigation */
        .mobile-nav-toggle {
            color: var(--nav-color);
            font-size: 28px;
            line-height: 0;
            cursor: pointer;
            transition: color 0.3s;
            display: none;
        }

        .mobile-menu {
            display: none;
            background-color: var(--nav-mobile-background-color);
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            bottom: 0;
            overflow-y: auto;
            z-index: 9998;
            padding: 20px;
            transition: 0.3s;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobile-menu li {
            padding: 10px 0;
        }

        .mobile-menu a {
            color: var(--nav-dropdown-color);
            padding: 10px 20px;
            font-family: var(--nav-font);
            font-size: 17px;
            font-weight: 500;
            display: block;
            transition: 0.3s;
        }

        .mobile-menu a:hover {
            color: var(--nav-dropdown-hover-color);
        }

        /* Responsive */
        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                display: block;
            }
            
            .navmenu ul {
                display: none;
            }
            
            .header {
                padding: 15px 0;
            }
        }

        /* Animation */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="font-sans bg-white">
    <header class="header">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="index.php" class="logo flex items-center">
                <img src="/public_html/assets/img/logo.png" alt="Nepal van Java" class="h-8">
            </a>

            <nav class="navmenu">
                <ul>
                    <li><a href="index.php?page=index">Profil</a></li>
                    <li><a href="index.php?page=spot-wisata">Spot Wisata</a></li>
                    <li><a href="index.php?page=services">Paket Wisata</a></li>
                    <li><a href="index.php?page=fasilitas-pendukung">Fasilitas Pendukung</a></li>
                    <li><a href="index.php?page=homestay">Homestay</a></li>
                    <li><a href="index.php?page=kuliner">Kuliner</a></li>
                    <li><a href="index.php?page=aksesibilitas">Aksesibilitas</a></li>
                    <li><a href="index.php?page=wisata-sekitar">Wisata Sekitar</a></li>
                    <li><a href="index.php?page=contact">Kontak</a></li>
                    <li>
                        <button class="ml-6 bg-white rounded-full p-2 shadow-sm border" data-bs-toggle="modal" data-bs-target="#userMenuModal">
                            <i class="bi bi-person-circle text-green-600 text-xl"></i>
                        </button>
                    </li>
                </ul>
            </nav>

            <button class="mobile-nav-toggle lg:hidden" id="mobile-menu-button">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <ul>
                <li><a href="index.php?page=index">Profil</a></li>
                <li><a href="index.php?page=spot-wisata">Spot Wisata</a></li>
                <li><a href="index.php?page=services">Paket Wisata</a></li>
                <li><a href="index.php?page=fasilitas-pendukung">Fasilitas Pendukung</a></li>
                <li><a href="index.php?page=homestay">Homestay</a></li>
                <li><a href="index.php?page=kuliner">Kuliner</a></li>
                <li><a href="index.php?page=aksesibilitas">Aksesibilitas</a></li>
                <li><a href="index.php?page=wisata-sekitar">Wisata Sekitar</a></li>
                <li><a href="index.php?page=contact">Kontak</a></li>
            </ul>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('active');
        });

        // Add shadow on scroll
        window.addEventListener('scroll', function () {
            const header = document.querySelector('.header');
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>