<div class="container w-100 h-100 overflow-auto">

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Contact tiltle</h5>
            <!-- Default Table -->
            <form action="./api/edit.php" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">tiltle</th>
                            <th scope="col">detailed</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rows = $Contect->all();
                        foreach ($rows as $row) {
                            ?>
                            <tr>
                                <td>

                                    <input type="text" name="title[]" value=" <?= $row['title']; ?>" class="form-control">
                                </td>
                                <td>

                                    <input type="text" name="detailed[]" value="<?= $row['detailed']; ?>"
                                        class="form-control">
                                </td>
                                <td>
                                    <input type="hidden" name="table" value="<?= $do; ?>">
                                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
            <!-- End Default Table Example -->
        </div>
    </div>





    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Booking Form</h5>
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = $Book->all();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td> <?= $row['name']; ?> </td>
                            <td> <?= $row['Phone']; ?> </td>
                            <td> <?= $row['email']; ?> </td>
                            <td>
                                <?php
                                echo date('Y-m-d H:i', strtotime($row['datetime']));
                                ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick=" del('Book',<?= $row['id']; ?>)">Del</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
</div>



<script>

    function editRow(rowData) {
        console.log(rowData);
        const params = new URLSearchParams(rowData).toString();
        console.log(rowData);
        const url = './backend/product_add.php?do=Contect&' + params;
        console.log(url);
        $('#modal').load(url);
    }

    function del(table, id) {
        console.log(table)
        $.post("./api/del.php", {
            table,
            id
        }, () => {
            location.reload();
        })
    }





</script>