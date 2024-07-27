<!-- 此頁未使用 -->
<style>
    .field-1-textarea {
        height: 20vh;
        /* 設定第一個輸入欄位高度為20% */
        overflow-y: scroll;
        /* 啟用垂直滾動條 */
    }
</style>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="w-100 text-center">新增圖片</h1>

            </div>
            <div class="modal-body">
                <form class='form-group mx-auto col-6 mt-5' action="./api/add.php" method="post">
                    <div class='d-flex my-2'>
                        <label for="textInput1" class="form-label ">svg.code &nbsp; :</label>
                        <input type="text" name="svg.code" id="formGroupExampleInput">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(1)</label>
                        <input type="text" name="text1" id="formGroupExampleInput2">
                    </div>
                    <div class='d-flex my-2'>
                        <label for="" class='col-3 form-label'>文字內容(2)</label>
                        <input type="text" name="text2" id="formGroupExampleInput3">
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