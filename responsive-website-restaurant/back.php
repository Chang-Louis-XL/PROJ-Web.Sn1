<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<style>
    .container-h {
        min-height: 85vh;

    }

    .main {
        height: 70vh;
    }

    .nav {
        height: 70vh;
    }
</style>

<body>
    <div class="container container-h d-flex justify-content-center align-items-center mt-3">
        <div class="row border border-1 w-100 d-flex justify-content-center align-items-center text-center">
            <div
                class="col-12 col-lg-3 mt-3 mb-3 border border-1 h-100 d-flex justify-content-center align-items-center">
                <ul class="nav flex-column text-center d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
            <div
                class="col-12 col-lg-8 mt-3 mb-3 border border-1 main d-flex justify-content-center align-items-center">

                <?php
                $do = $_GET['do'] ?? 'title';
				$file = "./backend/{$do}.php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./backend/home.php";
				}
                ?>


            </div>
        </div>
    </div>
</body>

</html>