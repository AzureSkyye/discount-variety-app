<?php include('../templates/header.php'); ?>

<body>
    <?php include('../templates/navbar.php'); ?>


    <section id="category" class="container d-flex justify-content-center align-items-center">

        <?php if (empty($searchStore)) { ?>

            <div class="table-wrapper d-grid justify-content-center align-items-center">
                <div class="text-center">
                    <h3 class="mb-2">No results returned</h3>
                    <h5>It seems we do not have this item</h5>
                    <svg style="width: 200px; opacity: 80%;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h6>
                        you can always use another search term <br>
                        and try again!
                    </h6>
                    <p>or browse by <a class="text-success text-decoration-none" href="home.php?#categories">category</a></p>
                </div>
            </div>

        <?php } else { ?>
            <div class="row d-flex justify-content-start align-items-center mt-3 border">
                <div class="col-12 mt-4">
                    <h6 class=""><span class="py-1 px-2 rounded">Results returned: <?php echo sizeof($searchStore) ?></span></h6>
                    <hr>
                </div>
                <?php foreach ($searchStore as $row) { ?>
                    <div class="col-4 my-3">
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
                                        <a href="../index.php?item_id=<?php echo $row['product_id']; ?>" class="btn btn-dark">View Item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </section>

    <?php include('../templates/footer.php'); ?>