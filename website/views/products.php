<?php include('../templates/header.php'); ?>

<body>
    <?php include('../templates/navbar.php'); ?>


    <section id="category" class="container d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-start align-items-center">
            <div class="col-12 my-4">
                <h1 class="text-center"><?php echo $categoryStore[0]['category']; ?></h1>
            </div>
            <?php foreach ($categoryStore as $row) { ?>
                <div class="col-4">
                    <div class="item card d-flex flex-column align-items-center border shadow">
                        <img src="../assets/<?php echo $row['category']; ?>.png" class="card-img-top" style="width: 300px; height: 300px;">
                        <div class="card-body border first">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                            <p class="card-text"><?php echo $row['product_desc']; ?></p>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="card-text m-0 my-2">
                                        <span class="text-danger">
                                            <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                        </span>
                                        <br>
                                        Price: <span class="text-success">
                                            $<?php echo $row['price']; ?>
                                        </span>
                                    </p>
                                </div>
                                <div>
                                    <a href="../index.php?id=<?php echo $row['product_id']; ?>" class="btn btn-dark">View Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include('../templates/footer.php'); ?>