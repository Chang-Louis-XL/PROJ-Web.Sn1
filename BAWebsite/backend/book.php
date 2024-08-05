<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="w-100 text-center">線上預約</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container w-75 mt-5 mb-5 ">
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
                    <button type="button" class="btn btn-primary" onclick="send()">提交</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function send() {
        let form = {
            name: $("#name").val(),
            phone: $("#phone").val(),
            email: $("#email").val(),
            datetime: $("#datetime").val(),
        }
        $.post("./api/booking.php", form, function (res) {
            if (res == '1') {
                alert('預定成功')
                addModal.hide()
            } else {
                alert('預定失敗')
            }
        })
    }

    addModal = new bootstrap.Modal('#addModal')
    modal = document.querySelector("#addModal")
    modal.addEventListener('hidden.bs.modal', event => {

        addModal.dispose()
        $("#BookView").html("")


    })
    //console.log(addModal)
    addModal.show()
</script>



 <!-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="w-100 text-center">線上預約</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container w-75 mt-5 mb-5 ">
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
                    <button type="button" class="btn btn-primary" onclick="send()">提交</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>


function send() {
    let form = {
        name: $("#name").val(),
        phone: $("#phone").val(),
        email: $("#email").val(),
        datetime: $("#datetime").val(),
    }
    $.post("./api/booking.php", form, function (res) {
        if (res == '1') {
            alert('預定成功');
            const addModalElement = document.getElementById('addModal');
            const addModal = bootstrap.Modal.getInstance(addModalElement);
            addModal.hide();
            // 在模態框隱藏後調用 onModalHidden 函數
            addModalElement.addEventListener('hidden.bs.modal', window.onModalHidden);
        } else {
            alert('預定失敗');
        }
    });
}

</script> -->