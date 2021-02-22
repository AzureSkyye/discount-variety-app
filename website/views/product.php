<?php include('../templates/header.php'); ?>

<body>

    <?php include('../templates/navbar.php'); ?>

    <section id="view" class="container d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-5">
                <div class="card d-flex flex-column align-items-center border">
                    <img src="../assets/<?php echo $productObj->getCategory(); ?>.png" class="card-img-top" style="width: 300px; height: 300px;">
                    <div class="card-body border">
                        <h5 class="card-title"><?php echo $productObj->getProductName(); ?></h5>
                        <p class="card-text"><?php echo $productObj->getProductDesc(); ?></p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="card-text m-0 my-2">
                                    <span class="text-danger">
                                        <?php echo $productObj->getStock() > 15 ? "In Stock: {$productObj->getStock()}" : "Only {$productObj->getStock()} Left in Stock"; ?>
                                    </span>
                                    <br>
                                    Price: <span class="text-success">
                                        $<?php echo $productObj->getPrice(); ?>
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-dark">Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include('../templates/footer.php'); ?>