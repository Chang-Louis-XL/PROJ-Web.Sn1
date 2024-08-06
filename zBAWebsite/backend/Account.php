<div class="container w-100 h-100 overflow-auto">
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Booking Form</h5>
            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">acc</th>
                        <th scope="col">pw</th>
                        <th scope="col">email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = $Account->all();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td> <?= $row['acc']; ?> </td>
                            <td> <?= $row['pw']; ?> </td>
                            <td> <?= $row['email']; ?> </td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick=" del('Account',<?= $row['id']; ?>)">Del</button>

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