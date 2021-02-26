<?php include('../../templates/admin_header.php'); ?>

<body>
    <?php include('../../templates/admin_nav.php'); ?>

    <section class="d-flex table-wrapper justify-content-center mt-4">
        <div class="container">
            <div class="my-4">
                <h5>Users</h5>
                <hr class="m-0">
            </div>
            <table class="table border shadow-sm">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th class="border" scope="col-" style="width: 2%;">ID</th>
                        <th class="border" scope="col-" style="width: 20%;">First Name</th>
                        <th class="border" scope="col-" style="width: 20%;">Last Name</th>
                        <th class="border" scope="col-" style="width: 20%;">Email</th>
                        <th class="border text-center" scope="col-" style="width: 5%;">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($userStore as $row) { ?>
                        <tr>
                            <th class="bg-secondary text-white" scope="row"><?php echo $row['user_id']; ?></th>
                            <td class="border-2 m-2"><?php echo $row['first_name']; ?></td>
                            <td class="border-2 m-2"><?php echo $row['last_name']; ?></td>
                            <td class="border-2 m-2"><?php echo $row['email']; ?></td>
                            <td>
                                <div class="d-flex justify-content-center ">
                                    <form action="../../index.php?user=delete" method="post">
                                        <input name="user_id" type="hidden" value="<?php echo $row['user_id']; ?>">
                                        <button name="delete_user" class="btn mx-2 nav-link text-danger p-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include('../../templates/footer.php'); ?>