<?php include('../../templates/admin_header.php'); ?>

<body>
    <?php include('../../templates/admin_nav.php'); ?>

    <section class="d-flex table-wrapper justify-content-center mt-4 px-4">
        <div class="container-fluid px-4">
            <div class="mt-4 mb-0 d-flex justify-content-between">
                <h6>Results returned: <?php echo sizeof($inventoryStore); ?></h6>
                <h5>Inventory Items</h5>
            </div>
            <hr class="mt-0">
            <table class="table border shadow-sm">
                <thead class="bg-secondary text-white text-center">
                    <tr class="align-middle">
                        <th class="border" scope="col" style="width: 2.33%;">ID</th>
                        <th class="border" scope="col" style="width: 17.67%;">Product Name</th>
                        <th class="border" scope="col" style="width: 6%;">Category</th>
                        <th class="border" scope="col" style="width: 3%">Stock</th>
                        <th class="border" scope="col" style="width: 6%;">Price</th>
                        <th class="border" scope="col">Product Description</th>
                        <th class="border text-center" scope="col">Edit</th>
                        <th class="border text-center" scope="col">Delete</th>
                        <th class="border text-center" scope="col" style="width: 9%;">Reports</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inventoryStore as $row) { ?>
                        <tr class="align-middle">
                            <th class="bg-secondary text-white" scope="row"><?php echo $row['product_id']; ?></th>
                            <td class="border-2 m-2"><?php echo $row['product_name']; ?></td>
                            <td class="border-2 m-2"><?php echo $row['category']; ?></td>
                            <td class="border-2 m-2"><?php echo $row['stock']; ?></td>
                            <td class="border-2 m-2">$<?php echo $row['price']; ?></td>
                            <td class="border-2 m-2 text-start"><?php echo $row['product_desc']; ?></td>
                            <td class="border-2 m-2">
                                <div class="d-flex">
                                    <form class="d-flex flex-column justify-content-center align-items-center" action="../../index.php?product=edit" method="post">
                                        <!-- Set the input vals -->
                                        <input name="product_name" type="hidden" value="<?php echo $row['product_name']; ?>">
                                        <input name="category" type="hidden" value="<?php echo $row['category']; ?>">
                                        <input name="stock" type="hidden" value="<?php echo $row['stock']; ?>">
                                        <input name="price" type="hidden" value="<?php echo $row['price']; ?>">
                                        <input name="product_id" type="hidden" value="<?php echo $row['product_id']; ?>">
                                        <input name="product_desc" type="hidden" value="<?php echo $row['product_desc']; ?>">
                                        <input name="total_purchased" type="hidden" value="<?php echo $row['total_purchased']; ?>">
                                        <div>
                                            <button name="edit" class="btn mx-2 nav-link text-success p-0">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td class="border-2 m-2">
                                <div class="d-flex">
                                    <form class="d-flex flex-column justify-content-center align-items-center" action="../../index.php?product=delete" method="post">
                                        <!-- We just need the ID here -->
                                        <div>
                                            <input name="product_id" type="hidden" value="<?php echo $row['product_id']; ?>">
                                            <button name="delete_product" class="btn mx-2 nav-link text-danger p-0">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td class="border-2 m-2">
                                <div class="d-flex justify-content-center">
                                    <a class="text-decoration-none" href="../../index.php?report_id=<?php echo $row['product_id']; ?>">
                                        <button name="item_report" class="btn m-0 nav-link text-secondary p-0">Sales Report</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include('../../templates/footer.php'); ?>