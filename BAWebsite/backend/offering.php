<div class="container w-100 h-100 overflow-auto">

    <button type="button" class=" btn btn-primary d-flex justify-content-start mb-2" id="addButton">新增圖片</button>

    <form action="./api/edit.php" method="post">
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
                            <?= $row['svg']; ?>
                        </td>
                        <td class="text-center align-middle w-50">
                                <h3 class="menu__name"><?= $row['text1']; ?></h3>
                                <p class="menu__detail"><?= $row['text2']; ?></p>
                        </td>
                        <td class="text-center align-middle">
                            <input type="hidden" name="table" value="<?= $do; ?>">
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <input type="checkbox" aria-label="checkbox button for following text input" name="sh[]"
                                id="checkbox_<?= $row['id']; ?>" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>顯示
                            <button type="button" class="btn btn-warning"
                                onclick="editRow(<?= htmlspecialchars(json_encode($row)); ?>, 'checkbox_<?= $row['id']; ?>')">Edit</button>
                            <button type="button" class="btn btn-danger"
                                onclick=" del('Offering',<?= $row['id']; ?>)">Del</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</div>
<div id="modal"></div>


<script>

    function editRow(rowData, checkboxId) {
        const checkbox = document.getElementById(checkboxId);
        rowData.sh = checkbox.checked ? 1 : 0;
        console.log(rowData);
        const params = new URLSearchParams(rowData).toString();
        console.log(rowData);
        const url = './backend/offering_add.php?do=Offering&' + params;
        console.log(url);
        $('#modal').load(url);
    }


    function del(table, id) {
        $.post("./api/del.php", {
            table,
            id
        }, () => {
            location.reload();
        })
    }


    document.getElementById('addButton').addEventListener('click', () => {
        $('#modal').load('./backend/offering_add.php?do=Offering', () => {
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




</script>