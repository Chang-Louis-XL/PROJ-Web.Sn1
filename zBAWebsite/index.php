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
                    if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin') {
                        echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                        echo "<li><i id='cog' onclick='location.href=&#39;./back.php&#39;' class='bx bx-cog change-theme'></i></li>";
                    } else if (!isset($_SESSION['user'])) {
                        echo "<li><i id='loginButton' class='bx bx-user change-theme' onclick=\"$('#loginContainer').load('./backend/login.php')\"></i></li>";
                    } else {
                        echo "<li><i id='logoutButton' onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out change-theme '></i></li>";
                    }
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
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <?php $home = $Home->find(['sh' => 1]) ?>

            <div class="home__container  bd-grid" style="background-image: url(./assets/img/<?= $home['img']; ?>);">
                <div class="home__data">
                    <h2 class="home__title"><?= $home['text1']; ?></h2>
                    <h2 class="home__subtitle"><?= $home['text2']; ?></h2>
                </div>
            </div>
        </section>


        <!--========== ABOUT ==========-->
        <?php $about = $About->find(['sh' => 1]) ?>
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">About us</span>
                    <h2 class="section-title about__initial"><?= $about['text1']; ?></h2>
                    <p class="about__description"><?= $about['text2']; ?></p>
                </div>

                <img src="./assets/img/<?= $about['img']; ?>" alt="" class="about__img">
            </div>
        </section>

        <!--========== SERVICES ==========-->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Offering</span>
            <h2 class="section-title">Our amazing services</h2>
            <div class="services__container  bd-grid">
                <?php $offerings = $Offering->all(['sh' => 1]);
                foreach ($offerings as $offering) { ?>
                    <div class="services__content">
                        <?= $offering['svg']; ?>
                        <h3 class="services__title"><?= $offering['text1']; ?></h3>
                        <p class="services__description"><?= $offering['text2']; ?></p>

                    </div>
                <?php } ?>
            </div>
        </section>
        <!--===== APP =======-->
        <?php $profolio = $Profolio->find(['sh' => 1]) ?>
        <section class="app section bd-container">
            <div class="app__container bd-grid">
                <div class="app__data">
                    <span class="section-subtitle app__initial">profolio</span>
                    <h2 class="section-title app__initial"><?= $profolio['text1']; ?></h2>
                    <p class="app__description"><?= $profolio['text2']; ?></p>
                    <div class="app__stores">
                        <a ><img src="assets/img/app1.png" alt="" class="app__store"></a>
                        <a ><img src="assets/img/app2.png" alt="" class="app__store"></a>
                    </div>
                </div>
                <img src="./assets/img/<?= $profolio['img']; ?>" alt="" class="app__img">
            </div>
        </section>
        <!--========== Product ==========-->
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">Product</span>
            <h2 class="section-title">best-seller</h2>

            <div class="menu__container bd-grid">
                <?php
                $products = $Product->all(['sh' => 1]);
                foreach ($products as $product) {
                    ?>
                    <div class="menu__content">
                        <img src="assets/img/<?= $product['img']; ?>" alt="" class="menu__img">
                        <h3 class="menu__name"><?= $product['menu_name']; ?></h3>
                        <span class="menu__detail"><?= $product['menu_detail']; ?></span>
                        <span class="menu__preci"><?= $product['menu_preci']; ?></span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>

                <?php } ?>
            </div>
        </section>

        <!--========== CONTACT US ==========-->
        <?php
        $contects = $Contect->all();
        foreach ($contects as $contect) {
            ?>
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial"><?= $contect['title']; ?></h2>
                        <p class="contact__description"><?= $contect['detailed']; ?></p>
                    </div>
                <?php } ?>
                <div class="contact__button">
                    <button class="button" style="border: none;"
                        onclick="$('#BookView').load('./backend/book.php')">Contact us now</button>
                </div>
            </div>
        </section>
    </main>
    <div id="BookView"></div>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Accessories</a>
                <span class="footer__description">Louis`s</span>
                <div>
                    <a class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Services</h3>
                <ul>
                    <li><a href="javascript:void(0)" class="footer__link">Delivery</a></li>
                    <li><a href="javascript:void(0)" class="footer__link">Pricing</a></li>
                    <li><a href="javascript:void(0)" class="footer__link">Fast food</a></li>
                    <li><a href="javascript:void(0)" class="footer__link">Reserve your spot</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="javascript:void(0)" class="footer__link">Event</a></li>
                    <li><a href="javascript:void(0)" class="footer__link">Contact us</a></li>
                    <li><a href="javascript:void(0)" class="footer__link">Privacy policy</a></li>
                    <li><a href="javascript:void(0)" class="footer__link">Terms of services</a></li>
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
        </div>

        <p class="footer__copy">&#169; 2020 Bedimcode. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>


</body>

</html>