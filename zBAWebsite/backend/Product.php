<div class="container w-100 h-100 mt-3 overflow-auto  mt-3">

    <table class="table">
        <button type="button" class="btn btn-primary d-flex justify-content-start mb-2" id="addButton">新增圖片</button>
        <div id="modal"></div>
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
                        <img src="<?php echo isset($row['img']) && !empty($row['img']) ? './assets/img/' . $row['img'] : 'https://via.placeholder.com/150'; ?>"
                            alt="Placeholder Image" class="rounded" style='width:150px;heightgit:150px'>
                    </td>

                    <td class="text-center align-middle">
                        <div class="col">
                            <h3 class="menu__name"><?= $row['menu_name']; ?></h3>
                            <p class="menu__detail"><?= $row['menu_detail']; ?></p>
                            <p class="menu__preci"><?= $row['menu_preci']; ?></p>
                        </div>
                    </td>
                    <td class="text-center align-middle">
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        <button class="show btn btn-primary" data-do="Product"
                            data-id="<?= $row['id']; ?>"><?= ($row['sh'] == 1) ? '顯示' : '隱藏'; ?>
                        </button>
                        <button type="button" class="btn btn-warning"
                        onclick="editRow(<?= htmlspecialchars(json_encode($row)); ?>)">Edit</button>
                        <button type="button" class="btn btn-danger"
                            onclick=" del('Product',<?= $row['id']; ?>)">Del</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<script>

function editRow(rowData) {
        console.log(rowData);
        const params = new URLSearchParams(rowData).toString();
        console.log(rowData);
        const url = './backend/product_add.php?do=Product&' + params;
        console.log(url);
        $('#modal').load(url);
    }

    $(".show").on("click", function () {
        $.post("./api/show.php", {
            id: $(this).data("id"),
            do: $(this).data("do")
        }, () => {

            // location.reload();

            switch ($(this).text()) {
                case '顯示':
                    $(this).text('隱藏')
                    break;
                case '隱藏':
                    $(this).text('顯示')
                    break;
            }
        })
    })

    // function editRow(rowData) {
    //     console.log(rowData);
    //     const params = new URLSearchParams(rowData).toString();
    //     console.log(rowData);
    //     const url = './backend/product_add.php?do=Product&' + params;
    //     console.log(URL);
    //     $('#modal').load(url);

    // }




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

</script>