<div class="container">
    <h2 class="mb-4">Home內容更新</h2>
    
    <form method="post" action="./api/update.php">
        <table class="table" style="width:100%;height:95%;overflow:auto;">
            <thead class="table-light">
                <tr>
                    <th>圖片</th>
                    <th>內容</th>
                    <th>顯示</th>
                    <th>刪除</th>
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
                                alt="Placeholder Image" class="rounded" style='width:150px;height:150px'>
                        </td>

                        <td class="text-center align-middle">
                            <label for="textInput1" class="form-label">內容(1)</label>
                            <input type="text" name="text1[]" value="<?= $row['text1']; ?>" class="form-control"
                                id="textInput1" placeholder="內容(1)">
                            <label for="textInput2" class="form-label">內容(2)</label>
                            <input type="text" name="text2[]" value="<?= $row['text2']; ?>" class="form-control"
                                id="textInput2" placeholder="內容(1)">
                        </td>


                        <td class="text-center align-middle">
                            <button type="submit" class="btn btn-primary">送出</button>
                        </td>
                        <td class="text-center align-middle">
                            <button type="submit" class="btn btn-primary">送出</button>
                        </td>
                    </tr>
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                <?php } ?>
            </tbody>
        </table>
    </form>
    <button type="submit" class="btn btn-primary d-flex justify-content-start"onclick="$('#modal').load('add_form.php')" >新增圖片</button>
    <div id="modal"></div>