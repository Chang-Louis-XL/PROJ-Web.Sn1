<div class="container w-100 h-100 overflow-auto mt-3">

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
                            <button class="show btn btn-primary" data-do="Offering"
                                data-id="<?= $row['id']; ?>"><?= ($row['sh'] == 1) ? '顯示' : '隱藏'; ?>
                            </button>
                            <button type="button" class="btn btn-warning"
                                onclick="editRow(<?= htmlspecialchars(json_encode($row)); ?>)">Edit</button>
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

    function editRow(rowData) {
        console.log(rowData);
        const params = new URLSearchParams(rowData).toString();
        console.log(rowData);
        const url = './backend/offering_add.php?do=Offering&' + params;
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