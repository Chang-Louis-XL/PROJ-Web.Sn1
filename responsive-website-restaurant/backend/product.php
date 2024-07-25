<div class="container w-100 h-100 overflow-auto">


    <button type="button" class="btn btn-primary d-flex justify-content-start mb-2" id="addButton">新增圖片</button>
    <div id="modal"></div>

    
        <table class="table">
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
                                alt="Placeholder Image" class="rounded" style='width:150px;heightgit:150px'>
                        </td>

                        <td class="text-center align-middle">
                            <label for="textInput1" class="form-label">menu_name</label>
                            <input type="text" name="menu_name[]" value="<?= $row['menu_name']; ?>" class="form-control"
                                id="textInput1" placeholder="內容(1)">
                            <label for="textInput2" class="form-label">menu_detail</label>
                            <input type="text" name="menu_detail[]" value="<?= $row['menu_detail']; ?>" class="form-control"
                                id="textInput2" placeholder="內容(2)">
                            <label for="textInput2" class="form-label">enu_preci</label>
                            <input type="text" name="menu_preci[]" value="<?= $row['menu_preci']; ?>" class="form-control"
                                id="textInput2" placeholder="內容(3)">
                        </td>

                        <td class="text-center align-middle">
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <input type="checkbox" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>顯示
                            <button type="button" class="btn btn-warning"  onclick="editRow(<?= json_encode($row); ?>)">Edit</button>
                            <button type="button" class="btn btn-danger" onclick=" del('Product',<?= $row['id']; ?>)">Del</button>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
</div>


<script>




function editRow(rowData) {
    console.log(rowData);  // 確認 rowData 正確
    const params = new URLSearchParams(rowData).toString();
    const url = './backend/product_add.php?do=Product' + params;
    console.log(url);  // 確認 URL 正確
    $('#modal').load(url, function(response, status, xhr) {
        if (status == "error") {
            console.log("Error: " + xhr.status + " " + xhr.statusText);
        }
    });
}


    document.getElementById('addButton').addEventListener('click', () => {
        $('#modal').load('./backend/product_add.php?do=Product', () => {
            const modalElement = document.getElementById('addModal');
            const modalContainer = modalElement.querySelector('.modal-content');

            const addModal = new bootstrap.Modal(modalElement);

            modalElement.addEventListener('hidden.bs.modal', () => {
                addModal.dispose();
                modalContainer.innerHTML = "";
            });

            addModal.show();
        });
    });


    function del(table, id) {
        $.post("./api/del.php", {
            table,
            id
        }, () => {
            location.reload();
        })
    }



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