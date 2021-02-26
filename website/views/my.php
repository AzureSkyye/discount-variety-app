<?php include('../templates/header.php') ?>

<body>
    <?php include('../templates/navbar.php') ?>
    <div class="container py-4 my-4 border d-grid justify-content-center align-items-center">
        <div class="d-grid justify-content-center">
            <svg class="text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 300px">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div>
                <h4 class="text-center"><?php echo $userObj->getFirstName() . " " . $userObj->getLastName(); ?></h4>
            </div>
        </div>
        <hr class="">
        <div class="row ">
            <div class="col-12">
                <?php if (!empty($orderObj)) { ?>
                    <div class="my-4">
                        <h5>Order History</h5>
                    </div>
                    <table class="table border shadow-sm">
                        <thead class="bg-secondary text-white text-center">
                            <tr class="align-middle">
                                <th class="border" scope="col">Product Name</th>
                                <th class="border" scope="col">Quantity</th>
                                <th class="border" scope="col">Paid</th>
                                <th class="border" scope="col">Purchased on</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orderObj as $row) { ?>
                                <tr class="align-middle">
                                    <td class="border-2 m-2"><?php echo $row['product_name']; ?></td>
                                    <td class="border-2 m-2"><?php echo $row['quantity']; ?></td>
                                    <td class="border-2 m-2 text-success">$<?php echo $row['cost']; ?></td>
                                    <td class="border-2 m-2"><?php echo $row['purchased_at']; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <div class="d-grid justify-content-center">
                                <h6>No Purchase History</h6>
                                <div class="d-flex justify-content-center">
                                    <svg class="text-danger" style="width: 100px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                            </div>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <?php include('../templates/footer.php') ?>