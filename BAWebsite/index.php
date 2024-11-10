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
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <?php $home = $Home->find(['sh' => 1]) ?>

            <div class="home__container  bd-grid" style="background-image: url(./assets/img/<?= $home['img']; ?>);">
                <div class="home__data">
                    <h2 class="home__title"><?= $home['text1']; ?></h2>
                    <h2 class="home__subtitle"><?= $home['text2']; ?></h2>
                    <!-- <a href="#" class="button">View Menu</a> -->
                </div>
                <!-- <img src="https://plus.unsplash.com/premium_photo-1668062993549-8167c11d6e7f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YWNjZXNzb3JpZXN8ZW58MHx8MHx8fDA%3D"
                    alt="" class="home__img"> -->
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
                    <!-- <a href="#" class="button">Explore history</a> -->
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
                <!-- <div class="services__content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24"
                        style="fill: rgba(152, 157, 158);transform: msFilter">
                        <path
                            d="M13.4 2.096a10.08 10.08 0 0 0-8.937 3.331A10.054 10.054 0 0 0 2.096 13.4c.53 3.894 3.458 7.207 7.285 8.246a9.982 9.982 0 0 0 2.618.354l.142-.001a3.001 3.001 0 0 0 2.516-1.426 2.989 2.989 0 0 0 .153-2.879l-.199-.416a1.919 1.919 0 0 1 .094-1.912 2.004 2.004 0 0 1 2.576-.755l.412.197c.412.198.85.299 1.301.299A3.022 3.022 0 0 0 22 12.14a9.935 9.935 0 0 0-.353-2.76c-1.04-3.826-4.353-6.754-8.247-7.284zm5.158 10.909-.412-.197c-1.828-.878-4.07-.198-5.135 1.494-.738 1.176-.813 2.576-.204 3.842l.199.416a.983.983 0 0 1-.051.961.992.992 0 0 1-.844.479h-.112a8.061 8.061 0 0 1-2.095-.283c-3.063-.831-5.403-3.479-5.826-6.586-.321-2.355.352-4.623 1.893-6.389a8.002 8.002 0 0 1 7.16-2.664c3.107.423 5.755 2.764 6.586 5.826.198.73.293 1.474.282 2.207-.012.807-.845 1.183-1.441.894z">
                        </path>
                        <circle cx="7.5" cy="14.5" r="1.5"></circle>
                        <circle cx="7.5" cy="10.5" r="1.5"></circle>
                        <circle cx="10.5" cy="7.5" r="1.5"></circle>
                        <circle cx="14.5" cy="7.5" r="1.5"></circle>
                    </svg>
                    <h3 class="services__title">Multimedia web design</h3>
                    <p class="services__description">We offer our clients excellent quality services for many years,
                        with the best and delicious food in the city.</p>
                </div>

                <div class="services__content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24"
                        style="fill: rgba(152, 157, 158);transform: msFilter">
                        <path
                            d="m14.49 20.937 5.381-1.166S17.93 6.633 17.914 6.546c-.016-.086-.086-.144-.158-.144s-1.439-.101-1.439-.101-.949-.949-1.064-1.05c-.027-.029-.057-.043-.086-.058l-.677 15.744zm.446-15.772c-.016 0-.043.014-.057.014-.016 0-.217.059-.533.158-.318-.919-.879-1.768-1.871-1.768h-.086c-.289-.361-.633-.519-.936-.519-2.316 0-3.426 2.892-3.77 4.359-.892.275-1.538.476-1.613.505-.504.158-.517.172-.574.648-.057.344-1.367 10.489-1.367 10.489l10.117 1.899.69-15.785zm-2.635.704v.102c-.559.173-1.178.36-1.783.547.346-1.323.992-1.972 1.553-2.217.146.375.23.878.23 1.568zm-.92-2.2c.1 0 .201.028.303.102-.732.344-1.539 1.222-1.871 2.978a59.11 59.11 0 0 1-1.411.432c.389-1.339 1.325-3.512 2.979-3.512zm.402 7.812s-.604-.315-1.322-.315c-1.08 0-1.123.676-1.123.849 0 .921 2.418 1.28 2.418 3.453 0 1.712-1.08 2.806-2.547 2.806-1.756 0-2.648-1.094-2.648-1.094l.475-1.554s.922.792 1.697.792a.693.693 0 0 0 .721-.69c0-1.209-1.986-1.268-1.986-3.252 0-1.669 1.195-3.295 3.627-3.295.936 0 1.395.272 1.395.272l-.707 2.028zm.922-7.281c.518.06.85.648 1.064 1.311-.258.087-.547.173-.863.273v-.187c0-.561-.072-1.022-.201-1.397z">
                        </path>
                    </svg>
                    <h3 class="services__title">Product management</h3>
                    <p class="services__description">We offer our clients excellent quality services for many years,
                        with the best and delicious food in the city.</p>
                </div> -->
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
                        <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                        <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
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

                    <!-- <div class="menu__content">
                        <img src="assets/img/p3.png" alt="" class="menu__img">
                        <h3 class="menu__name">Salad with fish</h3>
                        <span class="menu__detail">Delicious dish</span>
                        <span class="menu__preci">$12.00</span>
                        <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div> -->
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

                    <!-- <button onclick="loadBookView()" class="button" style="border: none;">Contact us now</button> -->
                    <!-- <button id="contactButton" class="button" style="border: none;">Contact us now</button> -->
                    <button class="button" style="border: none;" onclick="$('#BookView').load('./backend/book.php')">Contact us now</button>
                </div>
            </div>
        </section>
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