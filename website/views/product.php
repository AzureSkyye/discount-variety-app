<?php include('../templates/header.php'); ?>

<body>

    <?php include('../templates/navbar.php'); ?>

    <section id="Order" class="container d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 my-4 d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-center">Order Item</h1>
                <a class="nav-link p-0 m-0 text-success" href="../index.php?category=<?php echo $productObj->getCategory(); ?>">
                    More items in <?php echo $productObj->getCategory(); ?>
                </a>
            </div>
            <div class="col-5">
                <div class="card d-flex flex-column align-items-center border shadow item">
                    <img src="../assets/<?php echo $productObj->getCategory(); ?>.png" class="card-img-top" style="width: 300px; height: 300px;">
                    <div class="card-body border first">
                        <h5 class="card-title"><?php echo $productObj->getProductName(); ?></h5>
                        <p class="card-text"><?php echo $productObj->getProductDesc(); ?></p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="card-text m-0 my-2">
                                    <span class="text-danger">
                                        <?php echo $productObj->getStock() <= 0 ? "Currently Unavailable" : ($productObj->getStock() > 15 ? "In Stock {$productObj->getStock()}" : "Only {$productObj->getStock()} Left in Stock"); ?>
                                    </span>
                                    <br>
                                    Price: <span class="text-success">
                                        $<?php echo $productObj->getPrice(); ?>
                                    </span>
                                </p>
                            </div>

                            <?php
                            if (empty($userObj->getEmail()) || $userObj->getEmail() == '') { ?>
                                <div>
                                    <a class="nav-link" href="signup.php?item=<?php echo $productObj->getProductID(); ?>">Signup First to Order</a>
                                </div>
                            <?php } else { ?>
                                <div>
                                    <a <?php echo $userObj->isAdmin() == 'false' ? "href=\"order.php\"" : "aria-disabled=\"\"" ?> class="btn btn-dark">Order Item</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include('../templates/footer.php'); ?>