


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
                        <label for="img" class='col-3 form-label'>圖片</label>
                        <?php if (isset($_GET['id']) && !empty($_GET['img'])): ?>
                            <div>
                                <img src="../assets/img/<?php echo htmlspecialchars($_GET['img']); ?>" alt="Uploaded Image"
                                    style="max-width: 200px; max-height: 200px;">
                            </div>
                        <?php else: ?>
                            <input type="file" name="img" id="img">
                        <?php endif; ?>
                    </div>

                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(1)</label>
                        <input type="text" name="text1"
                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['text1'] : ''; ?>">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(2)</label>
                        <input type="text" name="text2"
                            value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['text2'] : ''; ?>">
                    </div>
                    <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>
                        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                    <?php } ?>
                    <?php if (isset($_GET['sh']) && !empty($_GET['sh'])) { ?>
                        <input type="radio" name="sh" value="<?= $_GET['sh']; ?>">
                    <?php } ?>
                    <input type="hidden" name="table" value="<?= $do = $_GET['do'] ?? 'Home'; ?>">
                    <input type="submit" value="送出" class='btn btn-primary'>
                    <input type="reset" value="重置" class='btn btn-warning'>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>



    const addModal = new bootstrap.Modal('#addModal')
    const modal = document.querySelector("#addModal")
    modal.addEventListener('hidden.bs.modal', event => {

        addModal.dispose()
        $("#modal").html("")

    })
    //console.log(addModal)
    addModal.show()




</script>