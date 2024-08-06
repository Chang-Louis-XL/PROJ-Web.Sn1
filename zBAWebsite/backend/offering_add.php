<div class="modal fade " id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container mt-5">
                <form class='form-group mx-auto w-75 mt-1' action="./api/add.php" method="post">
                    <div class="table-responsive">

                    
                        <div class="mb-3">
                            <?php if ((isset($_GET['id']) && !empty($_GET['id']))) { ?>
                                <?= $_GET['svg']; ?>
                            <?php } else { ?>
                                <label for="exampleFormControlTextarea1" class="form-label">svg code</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="svg"
                                    rows="3"></textarea>
                            <?php } ?>
                        </div>
                        
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">text1</label>
                                <input type="text" class="form-control" name="text1"
                                    value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['text1'] : ''; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">text2</label>
                                <input type="text" class="form-control" name="text2"
                                    value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['text2'] : ''; ?>">
                            </div>
                            <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>
                                <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                            <?php } ?>

                            <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>
                                <input type="hidden" name="sh" value="<?= $_GET['sh']; ?>">
                            <?php } else { ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="sh" value="1">
                                    <label class="form-check-label" for="gridCheck">
                                        顯示
                                    </label>
                                </div>
                            <?php } ?>

                        <input type="hidden" name="table" value="<?= $do = $_GET['do'] ?? 'Offering'; ?>">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <button type="reset" class="btn btn-warning">重置</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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