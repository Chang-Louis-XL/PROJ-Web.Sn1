<div class="container w-100 h-100 overflow-auto">

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Contact tiltle</h5>
            <!-- Default Table -->
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
                    $rows = $Book->all();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td> <?= $row['name']; ?> </td>
                            <td> <?= $row['phone']; ?> </td>
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





    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Booking Form</h5>
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col-2">E-mail</th>
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
                            <td> <?= $row['phone']; ?> </td>
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

</div>

<script>
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