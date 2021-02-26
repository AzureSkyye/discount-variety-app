<?php include('../../templates/admin_header.php'); ?>


<body>
    <?php include('../../templates/admin_nav.php'); ?>
    <section id="report" class="container-fluid d-flex justify-content-center align-items-center px-4">

        <div class="row d-flex justify-content-between px-4">
            <div class="col-12 my-4 d-flex flex justify-content-between align-items-end">
                <div>
                    <h5 class="">Sale Report</h5>
                    <a class="nav-link p-0 m-0 text-success" href="../../index.php?product=read_all">
                        Back to inventory
                    </a>
                </div>
                <div>
                    <?php foreach ($productStore as $row) {
                        $sum += $row['total_sold'] * $row['price'];
                    } ?>
                    <h5 class=""><span class="text-success">$<?php echo $sum; ?></span> Current Total Revenue</h5>
                    <h5 class="m-0 p-0 text-end">Inventory Items</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="card d-flex flex-column align-items-center border shadow item">
                    <img src="../../assets/<?php echo $productObj->getCategory(); ?>.png" class="card-img-top" style="width: 300px; height: 300px;">
                    <div class="card-body border first">
                        <h5 class="card-title"><?php echo $productObj->getProductName(); ?></h5>
                        <p class="card-text"><?php echo $productObj->getProductDesc(); ?></p>
                        <hr class="m-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="m-0 my-2">
                                Currently in Stock: <span class="text-danger">
                                    <?php echo $productObj->getStock() ?>
                                </span>
                            </p>
                            <p class="card-text m-0 my-2">
                                Price: <span class="text-success">
                                    $<?php echo $productObj->getPrice(); ?>
                                </span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="m-0 my-2">
                                Total Sold: <span class="text-danger">
                                    <?php echo $productObj->getTotalSold() ?>
                                </span>
                            </p>
                            <p class="card-text m-0 my-2">
                                Total Revenue: <span class="text-success">
                                    $<?php echo $productObj->getPrice() * $productObj->getTotalSold(); ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <table class="table border shadow-sm">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th class="border" scope="col">ID</th>
                            <th class="border" scope="col">Product Name</th>
                            <th class="border" scope="col">Total Sold</th>
                            <th class="border" scope="col">Total Revenue</th>
                            <th class="border" scope="col">Total Purchased</th>
                            <th class="border" scope="col">Projected Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productStore as $row) { ?>
                            <tr class="">
                                <th class="bg-secondary text-white" scope="row"><?php echo htmlspecialchars($row['product_id']); ?></th>
                                <td class="border-2 m-2">
                                    <a class="text-decoration-none text-secondary" href="../../index.php?report_id=<?php echo htmlspecialchars($row['product_id']); ?>">
                                        <?php echo htmlspecialchars($row['product_name']); ?>
                                    </a>
                                </td>
                                <td class="border-2 m-2"><?php echo htmlspecialchars($row['total_sold']); ?></td>
                                <td class="border-2 m-2 text-success">$<?php echo htmlspecialchars($row['price'] * $row['total_sold']); ?></td>
                                <td class="border-2 m-2"><?php echo htmlspecialchars($row['total_purchased']); ?></td>
                                <td class="border-2 m-2 text-success">$<?php echo htmlspecialchars($row['price'] * $row['total_purchased']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <?php include('../../templates/footer.php'); ?>