<div class="container">
    <h2 class="mb-4">Home內容更新</h2>
    <form method="post" action="./api/edit.php">
        <table class="table ">
            <thead class="table-light">
                <tr>
                    <th>內容</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rows = $do->all();
                foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td class="text-center align-middle">
                            <figcaption class="figure-caption text-end text-center">home backgrad-image</backgrad-image>
                            </figcaption>
                            <img src="<?php echo $row['img'] ?? 'https://via.placeholder.com/150'; ?>" alt="Placeholder Image" class="img-fluid">
                        </td>
                        <td class="text-center align-middle">
                            <button type="button" class="btn btn-primary"
                                onclick="document.getElementById('fileInput1').click();">瀏覽</button>
                            <input type="file" id="fileInput1" style="display:none;">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">
                            <input type="text" class="form-control" id="textInput1" placeholder="輸入文字">
                        </td>
                        <td class="text-center align-middle">
                            內容(1)
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">
                            <input type="text" class="form-control" id="textInput1" placeholder="輸入文字">
                        </td>
                        <td class="text-center align-middle">
                            內容(2)
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>