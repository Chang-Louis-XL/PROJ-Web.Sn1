<?php include_once "./api/base.php"; ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>back</title>
</head>

<style>
    .container-h {
        min-height: 85vh;

    }

    .main {
        height: 80vh;
    }

    .nav {
        height: 80vh;
    }
</style>

<body>
    <a href="index.php">回首頁</a>
    <span style="width:18%; display:inline-block;">
        <?php
        if (isset($_SESSION['user'])) {
            echo "歡迎，{$_SESSION['user']}";
            echo "<button onclick='location.href=&#39;./api/logout.php&#39;'>登出</button>";
        } else {
            echo "<a href='?do=login'>會員登入</a>";
        }
        ?>
    </span>
    <div class="container-fluid container-h d-flex justify-content-center align-items-center mt-5">
        <div class="row w-75 d-flex justify-content-center align-items-center text-center">
            <div class="col-12 col-lg-2 border border-1  d-flex justify-content-center align-items-center">
                <ul class="nav flex-column d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="?do=Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=About">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="?do=Services">Services</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?do=Offering">Offering</a></li>
                            <li><a class="dropdown-item" href="?do=Profolio">Profolio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=Contact">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-10 main border border-1  d-flex justify-content-center align-items-center">

                <?php
                $do = $_GET['do'] ?? 'Home';
                $file = "./backend/{$do}.php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    include "./backend/Home.php";
                }
                ?>


            </div>
        </div>
    </div>
</body>

</html>