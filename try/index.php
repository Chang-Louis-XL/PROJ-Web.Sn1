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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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