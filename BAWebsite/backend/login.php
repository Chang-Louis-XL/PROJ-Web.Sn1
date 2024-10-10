<style>
    /*========== login ==========*/
    /* Modal styles */
    /* .modal {
        display: none;
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
    } */
</style>

<!-- <div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <fieldset style="width:60%;margin:20px auto">
            <legend>會員登入</legend>
            <table>
                <tr>
                    <td>帳號</td>
                    <td><input type="text" name="acc" id="acc"></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="password" name="pw" id="pw"></td>
                </tr>
                <tr>
                    <td>
                        <button onclick="login()">登入</button>
                        <button onclick="clear()">清除</button>
                    </td>
                    <td>

                        <button id="forgotButton">忘記密碼</button>
                        <button id="registerButton">尚未註冊</button>

                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
</div> -->
<div id="loginModal" class="modal" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">會員登入</h5>
                <button type="button" class="btn-close close" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="acc" class="form-label">帳號</label>
                        <input type="text" class="form-control" id="acc" name="acc" placeholder="輸入帳號" value="admin">
                    </div>
                    <div class="mb-3">
                        <label for="pw" class="form-label">密碼</label>
                        <input type="password" class="form-control" id="pw" name="pw" placeholder="輸入密碼" value="1234">
                    </div>
                    <div class="btn-group d-flex justify-content-center align-items-center" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-secondary" onclick="login()">登入</button>
                        <button type="reset" class="btn btn-outline-secondary">清除</button>
                        <button type="button" class="btn btn-outline-secondary" id="forgotButton">忘記密碼</button>
                        <button type="button" class="btn btn-outline-secondary" id="registerButton">尚未註冊</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function login() {
        $.post('./api/chk_acc.php', {
            // 透過 ID 欄位檢索acc，作為名為的參數acc
            acc: $("#acc").val()
            // 來自伺服器的回應作為參數傳遞給回調函數chkAcc
        }, (chkAcc) => {
            // console.log(chkAcc)
            // 一次只會輸入一個帳號，並且從base中確認找到幾個，所以等於1
            if (parseInt(chkAcc) == 1) {
                $.post("./api/chk_pw.php", {
                    acc: $("#acc").val(),
                    pw: $("#pw").val()
                }, (chkPw) => {
                    // console.log(chkPW)
                    if (parseInt(chkPw)) {
                        if ($("#acc").val() == 'admin') {
                            location.href = 'back.php'
                        } else {
                            location.href = 'index.php'
                        }
                    } else {
                        alert("密碼錯誤")
                    }
                })
            } else {
                alert("查無帳號")
            }
        })
    }





    function clear() {

    }
</script>