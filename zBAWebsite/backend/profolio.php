<div class="container w-100 h-100 overflow-auto  mt-3">




    <div id="modal"></div>


    <form action="./api/edit.php" method="post">
        <table class="table">

            <div class="row sticky-top">
                <button type="button" class="col-12 col-lg-1 btn btn-primary d-flex justify-content-start"
                    onclick="showModal()">新增</button>
                <button type="submit" class="col-12 col-lg-1 btn btn-warning d-flex justify-content-start">編輯</button>
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
                            <img src="<?php echo isset($row['img']) && !empty($row['img']) ? './assets/img/' . $row['img'] : 'https://via.placeholder.com/300'; ?>"
                                alt="Placeholder Image" class="rounded" style='width:150px;height:150px'>
                        </td>

                        <td class="text-center align-middle">
                            <label for="textInput1" class="form-label">文字內容(1)</label>
                            <input type="text" name="text1[]" value="<?= $row['text1']; ?>" class="form-control"
                                id="textInput1" placeholder="內容(1)">
                            <label for="textInput2" class="form-label">文字內容(2)</label>
                            <input type="text" name="text2[]" value="<?= $row['text2']; ?>" class="form-control"
                                id="textInput2" placeholder="內容(1)">
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
            <div class="modal-header">
                <h1 class="w-100 text-center">新增圖片</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class='form-group mx-auto col-6 mt-5' action="./api/add.php" method="post"
                    enctype="multipart/form-data">
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>圖片</label>
                        <input type="file" name="img">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(1)</label>
                        <input type="text" name="text1">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(2)</label>
                        <input type="text" name="text2">
                    </div>
                    <div>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="submit" value="送出" class='btn btn-primary'>
                        <input type="reset" value="重置" class='btn btn-warning'>
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