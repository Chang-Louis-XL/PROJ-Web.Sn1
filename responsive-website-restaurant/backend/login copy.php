<!DOCTYPE html>
<html lang="en">

<head>
    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<style>
    .container-login {
        margin-top: 20vh;
        width: 50%;
        height: 40vh;
        /* background-color: lightblue; */
    }

    .container-photo {
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: lightpink; */
        height: 100%;
    }

    .container-photo>img {
        width: 100%;
        height: 100%;
    }
</style>

<body>

    <section class="home" id="home">
        <div class="home__container  bd-grid">
          

                <div class="container container-login border rounded p-3">
                    <div class="h-100 row">
                        <div class="h-100 col">
                            <div class="container-photo">
                                <img src="./images/Snipaste_2024-06-07_12-06-07.png" alt="" srcset="">
                            </div>
                        </div>
                        <div class="h-100 col">
                            <div>
                                <h3 class="mt-5">login</h3>
                                <form action="/action_page.php">
                                    <div class="mb-3 mt-3">
                                        <div class="mb-3 mt-3">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd"
                                            placeholder="Enter password" name="pswd">
                                    </div>
                                    <div class="form-check mb-3">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

</body>

</html>