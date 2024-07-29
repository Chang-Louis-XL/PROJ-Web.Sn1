
    <style>
        /* Modal styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
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

        /* Additional styles for the content */
        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        legend {
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
        }
    </style>

    <div id="regModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <fieldset>
                <legend>會員註冊</legend>
                <div style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</div>
                <table>
                    <tr>
                        <td class="clo">Step1:登入帳號</td>
                        <td><input type="text" name="acc" id="acc"></td>
                    </tr>
                    <tr>
                        <td class="clo">Step2:登入密碼</td>
                        <td><input type="password" name="pw" id="pw"></td>
                    </tr>
                    <tr>
                        <td class="clo">Step3:再次確認密碼</td>
                        <td><input type="password" name="pw2" id="pw2"></td>
                    </tr>
                    <tr>
                        <td class="clo">Step4:信箱(忘記密碼時使用)</td>
                        <td><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>
                            <button onclick="reg()">註冊</button>
                            
                        </td>
                        <td>
                            <button onclick="clear()">清除</button>
                    </td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>

    <script>
        function reg() {
            let user = {
                acc: $("#acc").val(),
                pw: $("#pw").val(),
                pw2: $("#pw2").val(),
                email: $("#email").val(),
            }

            if (user.acc == '' || user.pw == '' || user.pw2 == '' || user.email == '') {
                alert("不可空白")
            } else if (user.pw != user.pw2) {
                alert("密碼錯誤")
            } else {
                $.post('./api/chk_acc.php', {
                    acc: user.acc
                }, (chk) => {
                    if (parseInt(chk) == 1) {
                        alert("帳號重複")
                    } else {
                        $.post("./api/reg.php", user, (res) => {
                            console.log(res)
                            alert("註冊完成，歡迎加入")
                            window.location.href = "index.php";
                        })
                    }
                })
            }
        }

        // Add modal display functionality
        $(document).ready(function() {
            $("#regModal").css("display", "block");

            // Add close functionality
            $(".close").click(function() {
                $("#regModal").css("display", "none");
            });

            // Hide modal when clicking outside of modal-content
            $(window).click(function(event) {
                if (event.target.id == "regModal") {
                    $("#regModal").css("display", "none");
                }
            });
        });
    </script>

