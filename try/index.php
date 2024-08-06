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
    <style>
        /*========== login ==========*/
        /* Modal styles */
        .modal {

            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>


    <div class="container w-25 mt-5">
        <h2>線上預約</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">姓名</label>
                <input type="text" class="form-control" id="name" placeholder="輸入姓名">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">聯絡電話</label>
                <input type="tel" class="form-control" id="phone" placeholder="輸入聯絡電話">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">電子信箱</label>
                <input type="email" class="form-control" id="email" placeholder="輸入電子信箱">
            </div>
            <div class="mb-3">
                <label for="datetime" class="form-label">選擇日期與時間</label>
                <input type="datetime-local" class="form-control" id="datetime">
            </div>
            <button type="button" class="btn btn-primary" onclick="find()">提交</button>
        </form>
    </div>



</body>


</html>