

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="w-100 text-center">新增圖片</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div><?=$_GET['img']?></div>
                <form class='form-group mx-auto col-6 mt-5' action="./api/add.php" method="post"
                    enctype="multipart/form-data">
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>圖片</label>
                        <input type="file" name="img" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? "../assets/img/{$_GET['img']}" : 'img'; ?>">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(1)</label>
                        <input type="text" name="text1" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['text1'] : 'text1'; ?>">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(2)</label>
                        <input type="text" name="text2" value="<?php echo (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['text2'] : 'text2'; ?>">
                    </div>
                    <div>
                        <input type="hidden" name="table" value="<?=$do = $_GET['do'] ?? 'Home';?>">
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