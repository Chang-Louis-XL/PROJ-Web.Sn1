
<style>
    /*========== login ==========*/
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


<div id="BookModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="mb-3">
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
    </div>
</div>