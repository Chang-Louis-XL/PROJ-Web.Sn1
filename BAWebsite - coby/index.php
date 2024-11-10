<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <title>Louis`s BAWebsite</title>
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">Louis`s</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link">Product</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                    <!--========== LOGIN ==========-->
                    <?php

                    // if (isset($_SESSION['user'])) {
                    //     echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                    //     echo "<li><i id='cog' onclick='location.href=&#39;./back.php&#39;' class='bx bx-cog change-theme'></i></li>";
                    //     // echo "<button onclick='location.href=&#39;./api/logout.php&#39;'>登出</button>";
                    // } else {
                    //     echo "<li><i id='loginButton' class='bx bx-user change-theme' onclick=\"$('#loginContainer').load('./backend/login.php')\"></i></li>";
                    // }
                    
                    if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin') {
                        echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                        echo "<li><i id='cog' onclick='location.href=&#39;./back.php&#39;' class='bx bx-cog change-theme'></i></li>";
                    } else if (!isset($_SESSION['user'])) {
                        echo "<li><i id='loginButton' class='bx bx-user change-theme' onclick=\"$('#loginContainer').load('./backend/login.php')\"></i></li>";
                    } else {
                        echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                    }


                    // if (isset($_SESSION['user']) && is_array($_SESSION['user']) && $_SESSION['user']['acc'] === 'admin') {
                    //     echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                    //     echo "<li><i id='cog' onclick='location.href=&#39;./back.php&#39;' class='bx bx-cog change-theme'></i></li>";
                    // } else {
                    //     echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                    // }
                    
                    // if (!isset($_SESSION['user'])) {
                    //     echo "<li><i id='loginButton' class='bx bx-user change-theme' onclick=\"$('#loginContainer').load('./backend/login.php')\"></i></li>";
                    // }
                    

                    ?>
                    <div id="loginContainer"></div>
                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--========== include-buycart ==========-->        
        <?php
            $do = $_GET['do'] ?? 'main';
            $file = "front/$do.php";
            if (file_exists($file)) {
                include $file;
            } else {
                include 'front/main.php';
            }
            ?>
    </main>
    <div id="BookView"></div>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <!-- <div class="footer__container bd-grid">
            <div class="footer__content">
            <a href="#" class="footer__logo">Accessories</a>
            <span class="footer__description">Louis`s</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="#" class="footer__link">Delivery</a></li>
                    <li><a href="#" class="footer__link">Pricing</a></li>
                    <li><a href="#" class="footer__link">Fast food</a></li>
                    <li><a href="#" class="footer__link">Reserve your spot</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Event</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Privacy policy</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Adress</h3>
                <ul>
                    <li>Lima - Peru</li>
                    <li>Jr Union #999</li>
                    <li>999 - 888 - 777</li>
                    <li>tastyfood@email.com</li>
                </ul>
            </div>
        </div> -->

        <p class="footer__copy">&#169; 2020 Bedimcode. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>


</body>

</html>