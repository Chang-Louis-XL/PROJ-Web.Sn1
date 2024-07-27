<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--========== BOX ICONS ==========-->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <!--========== CSS ==========-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Responsive website food</title>
</head>

<body>
  <?php
  if (isset($_SESSION['user'])) {
    echo "<i onclick='location.href=&#39;./api/logout.php&#39;' class='bx bx-log-out'></i>";
    // echo "<button onclick='location.href=&#39;./api/logout.php&#39;'>登出</button>";
  } else {
    echo "<button><i id='loginButton' class='bx bx-user change-theme' onclick=\"$('#loginContainer').load('./ddd/login.php')\"></i></button>";
  }
  ?>

  <div id="loginContainer"></div>




  <div class="accordion accordion-flush">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Accordion Item #1
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
          <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
      </div>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-5">
                <form>
                    <div class="table-responsive">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">svg.code</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <table class="table">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" class="form-control" name="text1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="text2">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="sh">
                                    <label class="form-check-label" for="gridCheck">
                                        顯示
                                    </label>
                                </div>
                            </div>
                        </table>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <button type="reset" class="btn btn-warning">重置</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




</body>
<script>
  $(document).ready(function () {
    // 當按下會員登入按鈕時，動態加載login.php並顯示彈出視窗
    $("#loginButton").click(function () {
      $("#loginContainer").load('./backend/login.php', function () {
        $("#loginModal").css("display", "block");

        // 添加關閉彈出視窗的功能
        $(".close").click(function () {
          $("#loginModal").css("display", "none");
        });

        // 當點擊彈出視窗外部時，隱藏彈出視窗
        $(window).click(function (event) {
          if (event.target.id == "loginModal") {
            $("#loginModal").css("display", "none");
          }
        });
      });
    });
  });


</script>
</body>


</html>