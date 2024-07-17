<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Responsive website food</title>
</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">Wallis`s</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="#menu" class="nav__link">product</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                    <!--========== LOGIN ==========-->
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "<i onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out'></i>";
                        // echo "<button onclick='location.href=&#39;./api/logout.php&#39;'>登出</button>";
                    } else {
                        echo "<li><i id='loginButton' class='bx bx-user change-theme' onclick=\"$('#loginContainer').load('./backend/login.php')\"></i></li>";
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
            <div class="home__container  bd-grid">
                <div class="home__data">
                    <h2 class="home__title">Taiwan boutique agent</h2>
                    <h2 class="home__subtitle">Blooming the value of products</h2>
                    <!-- <a href="#" class="button">View Menu</a> -->
                </div>
                <!-- <img src="https://plus.unsplash.com/premium_photo-1668062993549-8167c11d6e7f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YWNjZXNzb3JpZXN8ZW58MHx8MHx8fDA%3D"
                    alt="" class="home__img"> -->
            </div>
        </section>


        <!--========== ABOUT ==========-->
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">About us</span>
                    <h2 class="section-title about__initial">Create new value</h2>
                    <p class="about__description">Decades of experience in advertising, helping high-quality products
                        gain greater visibility.</p>
                    <a href="#" class="button">Explore history</a>
                </div>

                <img src="https://images.unsplash.com/photo-1559385072-5adb2c4fc83f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8RElPUnxlbnwwfHwwfHx8MA%3D%3D"
                    alt="" class="about__img">
            </div>
        </section>

        <!--========== SERVICES ==========-->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Offering</span>
            <h2 class="section-title">Our amazing services</h2>

            <div class="services__container  bd-grid">
                <div class="services__content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24"
                        style="fill: rgb(152, 157, 158);transform: msFilter">
                        <path
                            d="M19.148 2.971A2.008 2.008 0 0 0 17.434 2H6.566c-.698 0-1.355.372-1.714.971L2.143 7.485A.995.995 0 0 0 2 8a3.97 3.97 0 0 0 1 2.618V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.382A3.97 3.97 0 0 0 22 8a.995.995 0 0 0-.143-.515l-2.709-4.514zm.836 5.28A2.003 2.003 0 0 1 18 10c-1.103 0-2-.897-2-2 0-.068-.025-.128-.039-.192l.02-.004L15.22 4h2.214l2.55 4.251zM10.819 4h2.361l.813 4.065C13.958 9.137 13.08 10 12 10s-1.958-.863-1.993-1.935L10.819 4zM6.566 4H8.78l-.76 3.804.02.004C8.025 7.872 8 7.932 8 8c0 1.103-.897 2-2 2a2.003 2.003 0 0 1-1.984-1.749L6.566 4zM10 19v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.142c.321.083.652.142 1 .142a3.99 3.99 0 0 0 3-1.357c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357A3.99 3.99 0 0 0 18 12c.348 0 .679-.059 1-.142V19h-3z">
                        </path>
                    </svg>
                    <h3 class="services__title">Store display</h3>
                    <p class="services__description">We offer our clients excellent quality services for many years,
                        with the best and delicious food in the city.</p>
                </div>

                <div class="services__content">
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
                </div>
            </div>
        </section>
        <!--===== APP =======-->
        <section class="app section bd-container">
            <div class="app__container bd-grid">
                <div class="app__data">
                    <span class="section-subtitle app__initial">profolio</span>
                    <h2 class="section-title app__initial"> multimedia </h2>
                    <p class="app__description">Find our application and download it, you can make reservations, food
                        orders, see your deliveries on the way and much more.</p>
                    <div class="app__stores">
                        <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                        <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1622782914767-404fb9ab3f57?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="app__img">
            </div>
        </section>
        <!--========== MENU ==========-->
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">product</span>
            <h2 class="section-title">best-seller</h2>

            <div class="menu__container bd-grid">
                <div class="menu__content">
                    <img src="assets/img/p1.png" alt="" class="menu__img">
                    <h3 class="menu__name">Barbecue salad</h3>
                    <span class="menu__detail">Delicious dish</span>
                    <span class="menu__preci">$22.00</span>
                    <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="menu__content">
                    <img src="assets/img/p3.png" alt="" class="menu__img">
                    <h3 class="menu__name">Salad with fish</h3>
                    <span class="menu__detail">Delicious dish</span>
                    <span class="menu__preci">$12.00</span>
                    <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="menu__content">
                    <img src="assets/img/p4.png" alt="" class="menu__img">
                    <h3 class="menu__name">Spinach salad</h3>
                    <span class="menu__detail">Delicious dish</span>
                    <span class="menu__preci">$9.50</span>
                    <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                </div>
            </div>
        </section>

        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's talk</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">If you want to reserve a table in our restaurant, contact us and we
                        will attend you quickly, with our 24/7 chat service.</p>
                </div>

                <div class="contact__button">
                    <a href="#" class="button">Contact us now</a>
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">Tasty Food</a>
                <span class="footer__description">Restaurant</span>
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
        </div>

        <p class="footer__copy">&#169; 2020 Bedimcode. All right reserved</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>


</body>

</html>