<div class="container w-100 h-100 overflow-auto">




    <div id="modal"></div>


    <form action="./api/edit.php" method="post">
        <table class="table">

            <div class="row sticky-top">
                <!-- <button type="button" class="btn btn-primary d-flex justify-content-start mb-3"
            onclick="$('#modal').load('./backend/home_add.php?do=Home')">新增</button> -->
                <button type="button" class="col-12 col-lg-1 btn btn-primary "
                    onclick="showModal()">新增</button>
                <button type="submit" class="col-12 col-lg-1 btn btn-warning ">編輯</button>
            </div>

            <thead class="table-light">
                <tr>
                    <th>圖片</th>
                    <th>內容</th>
                    <th>操作</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $rows = ${$do}->all();
                foreach ($rows as $row) {
                    ?>

                    <tr>
                        <td class="text-center align-middle">
                            <label for="textInput1" class="form-label">svg.code</label>
                            <input type="text" name="svg.code[]" value="<?= $row['svg.code']; ?>" class="form-control"
                                style='width:150px;height:300px'>
                        </td>

                        <td class="text-center align-middle">
                            <label for="textInput1" class="form-label">title</label>
                            <input type="text" name="title[]" value="<?= $row['title']; ?>" class="form-control">
                            <label for="textInput1" class="form-label">文字內容(1)</label>
                            <input type="text" name="text1[]" value="<?= $row['text1']; ?>" class="form-control">
                            <label for="textInput2" class="form-label">文字內容(2)</label>
                            <input type="text" name="text2[]" value="<?= $row['text2']; ?>" class="form-control">
                        </td>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        <td class="text-center align-middle">
                            <input type="radio" aria-label="Radio button for following text input" name="sh"
                                value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>顯示
                            <input type="checkbox" aria-label="Checkbox for following text input" name="del[]"
                                value="<?= $row['id']; ?>">刪除
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</div>



<script>
    function showModal() {
        const modalContainer = document.getElementById('modal');
        modalContainer.innerHTML = `
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
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
    `;

        const addModal = new bootstrap.Modal(document.getElementById('addModal'));
        const modalElement = document.getElementById('addModal');

        modalElement.addEventListener('hidden.bs.modal', event => {
            addModal.dispose();
            modalContainer.innerHTML = "";
        });

        addModal.show();
    }



</script>