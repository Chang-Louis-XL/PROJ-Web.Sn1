
<form class='form-group mx-auto col-6 mt-5' action="./api/add.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="w-100 text-center">新增/編輯</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- <?php 
                    // var_dump($_GET);
                    // var_dump($row);
                    ?> -->
                </div>

                <div class="modal-body">
                    <?php if ((isset($_GET['id']) && !empty($_GET['id']))) { ?>
                        <img src="<?php echo isset($_GET['id']) && !empty($_GET['id']) ? './assets/img/'. $_GET['img'] : 'https://via.placeholder.com/150'; ?>"
                            alt="Placeholder Image" class="rounded" style='width:150px;height:150px'>
                            
                    <?php } else { ?>

                        <div class='d-flex my-2'>
                            <label for="" class='col-3 form-label'>圖片</label>
                            <input type="file" name="img">
                        </div>
                    <?php } ?>
                </div>


                <div class='d-flex my-2'>
                    <label for="" class='col-3 form-label'>menu_name:</label>
                    <input type="text" name="menu_name"
                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['menu_name'] : ''; ?>">
                </div>
                <div class='d-flex my-2'>
                    <label for="" class='col-3 form-label'>menu_detail:</label>
                    <input type="text" name="menu_detail"
                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['menu_detail'] : ''; ?>">
                </div>
                <div class='d-flex my-2'>
                    <label for="" class='col-3 form-label'>menu_preci:</label>
                    <input type="text" name="menu_preci"
                        value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['menu_preci'] : ''; ?>">
                </div>

                <div>
                    <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>
                        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                    <?php } ?>

                    <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>
                        <input type="hidden" name="sh" value="<?= $_GET['sh']; ?>">
                    <?php } ?>

                    <input type="hidden" name="table" value="<?= $do = $_GET['do'] ?? 'Product'; ?>">
                    <input type="submit" value="送出" class='btn btn-primary'>
                    <input type="reset" value="重置" class='btn btn-warning'>


                </div>
            </div>
        </div>
    </div>
</form>


<script>


    <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>

        // edit啟用
        function showModal() {
            // 獲取模態框元素
            const modalElement = document.querySelector("#addModal");

            // 創建新的模態框實例
            const addModal = new bootstrap.Modal(modalElement);

            // 添加模態框關閉事件監聽器
            modalElement.addEventListener('hidden.bs.modal', event => {
                // 清空模態框內容
                $("#modal").html("");
            }, { once: true }); // 使用 { once: true } 確保事件監聽器僅運行一次

            // 顯示模態框
            addModal.show();
        }

        // 調用 showModal 函數顯示模態框
        showModal();

    <?php } ?>

</script>