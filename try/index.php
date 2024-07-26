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




<div class="accordion accordion-flush" >
  <div class="accordion-item">
    <h2 class="accordion-header" >
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>

</body>
<script>
$(document).ready(function(){
    // 當按下會員登入按鈕時，動態加載login.php並顯示彈出視窗
    $("#loginButton").click(function(){
        $("#loginContainer").load('./backend/login.php', function() {
            $("#loginModal").css("display", "block");

            // 添加關閉彈出視窗的功能
            $(".close").click(function(){
                $("#loginModal").css("display", "none");
            });

            // 當點擊彈出視窗外部時，隱藏彈出視窗
            $(window).click(function(event){
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