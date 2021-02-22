<?php include('../../templates/admin_header.php'); ?>

<body>
    <?php include('../../templates/admin_nav.php'); ?>

    <section class="d-flex table-wrapper justify-content-center mt-4">
        <div class="container-fluid">
            <div class="my-4">
                <h1 class="text-center">Inventory</h1>
            </div>
            <table class="table border shadow-sm">
                <thead class="bg-secondary text-white text-center">
                    <tr>
                        <th class="border" scope="col" style="width: 2.33%;">ID</th>
                        <th class="border" scope="col" style="width: 17.67%;">Product Name</th>
                        <th class="border" scope="col" style="width: 6%;">Category</th>
                        <th class="border" scope="col" style="width: 3%">Stock</th>
                        <th class="border" scope="col" style="width: 6%;">Price</th>
                        <th class="border" scope="col">Product Description</th>
                        <th class="border text-center" scope="col">Edit</th>
                        <th class="border text-center" scope="col">Delete</th>
                        <th class="border text-center" scope="col">Reports</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productStore as $row) { ?>
                        <tr class="text-center">
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
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <button name="" class="btn mx-2 nav-link text-yellow p-0">Sales Report</button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php include('../../templates/footer.php'); ?>