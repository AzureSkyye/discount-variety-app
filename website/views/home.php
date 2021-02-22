<?php include('../templates/header.php'); ?>


<body>
    <?php include('../templates/navbar.php'); ?>
    <?php include('../templates/landing.php'); ?>
    <?php include('../templates/categories.php'); ?>

    <div class="container d-flex justify-content-center align-items-center p-4">
        <div>
            <h2>Best Sellers</h2>
            <h4>2 from each category</h4>
            <p>Prices are all vat exclusive</p>
        </div>
    </div>
    <hr class="mt-0">

    <!-- Products Section -->
    <section id="products" class="sections r">
        <div class="container-fluid" data-bs-spy="scroll" data-bs-target="#side-nav">
            <div class="row d-flex justify-content-center">
                <div class="col-8">

                    <!-- Electronic Products -->
                    <section id="electronics" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Electronics</span></h5>
                        </div>
                        <?php foreach ($productStore as $row) { ?>
                            <?php if ($row['category'] == "Electronics") { ?>
                                <?php $count += 1; ?>
                                <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                                    <img src="../assets/Electronics.png" alt="" class="item" style="max-width: 210px; max-height: 210px;">
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <h3 class="title"><?php echo $row['product_name'] ?></h3>
                                        <p class="desc"><?php echo $row['product_desc'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-danger">
                                                    <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                                </p>
                                                <p class="m-0 text-success">$<?php echo $row['price'] ?></p>
                                            </div>
                                            <a href="../index.php?id=<?php echo $row['product_id']; ?>">
                                                <button class="btn btn-outline-dark">See Item</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($count == 2) {
                                    break;
                                } ?>
                            <?php } ?>
                        <?php } ?>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <a href="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </a>
                        </div>
                    </section>
                    <hr>

                    <!-- Stationary Products -->
                    <section id="stationary" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Stationary</span></h5>
                        </div>
                        <?php foreach ($productStore as $row) { ?>
                            <?php if ($row['category'] == "Stationary") { ?>
                                <?php $count += 1; ?>
                                <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                                    <img src="../assets/Stationary.png" alt="" class="item" style="max-width: 210px; max-height: 210px;">
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <h3 class="title"><?php echo $row['product_name'] ?></h3>
                                        <p class="desc"><?php echo $row['product_desc'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-danger">
                                                    <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                                </p>
                                                <p class="m-0 text-success">$<?php echo $row['price'] ?></p>
                                            </div>
                                            <a href="../index.php?id=<?php echo $row['product_id']; ?>">
                                                <button class="btn btn-outline-dark">See Item</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($count == 2) {
                                    break;
                                } ?>
                            <?php } ?>
                        <?php } ?>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <a href="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </a>
                        </div>
                    </section>
                    <hr>

                    <!-- Clothing Section -->
                    <section id="clothing" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Clothing</span></h5>
                        </div>
                        <?php foreach ($productStore as $row) { ?>
                            <?php if ($row['category'] == "Clothing") { ?>
                                <?php $count += 1; ?>
                                <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                                    <img src="../assets/Clothing.png" alt="" class="item" style="max-width: 210px; max-height: 210px;">
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <h3 class="title"><?php echo $row['product_name'] ?></h3>
                                        <p class="desc"><?php echo $row['product_desc'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-danger">
                                                    <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                                </p>
                                                <p class="m-0 text-success">$<?php echo $row['price'] ?></p>
                                            </div>
                                            <a href="../index.php?id=<?php echo $row['product_id']; ?>">
                                                <button class="btn btn-outline-dark">See Item</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($count == 2) {
                                    break;
                                } ?>
                            <?php } ?>
                        <?php } ?>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <a href="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </a>
                        </div>
                    </section>
                    <hr>

                    <!-- Games and Console Section -->
                    <section id="games" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Games and Consoles</span></h5>
                        </div>
                        <?php foreach ($productStore as $row) { ?>
                            <?php if ($row['category'] == "Games") { ?>
                                <?php $count += 1; ?>
                                <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                                    <img src="../assets/Games.png" alt="" class="item" style="max-width: 210px; max-height: 210px;">
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <h3 class="title"><?php echo $row['product_name'] ?></h3>
                                        <p class="desc"><?php echo $row['product_desc'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-danger">
                                                    <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                                </p>
                                                <p class="m-0 text-success">$<?php echo $row['price'] ?></p>
                                            </div>
                                            <a href="../index.php?id=<?php echo $row['product_id']; ?>">
                                                <button class="btn btn-outline-dark">See Item</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($count == 2) {
                                    break;
                                } ?>
                            <?php } ?>
                        <?php } ?>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <a href="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </a>
                        </div>
                    </section>
                    <hr>

                    <!-- Furniture -->
                    <section id="furniture" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Furniture and Accessories</span></h5>
                        </div>
                        <?php foreach ($productStore as $row) { ?>
                            <?php if ($row['category'] == "Furniture") { ?>
                                <?php $count += 1; ?>
                                <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                                    <img src="../assets/Furniture.png" alt="" class="item" style="max-width: 210px; max-height: 210px;">
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <h3 class="title"><?php echo $row['product_name'] ?></h3>
                                        <p class="desc"><?php echo $row['product_desc'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-danger">
                                                    <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                                </p>
                                                <p class="m-0 text-success">$<?php echo $row['price'] ?></p>
                                            </div>
                                            <a href="../index.php?id=<?php echo $row['product_id']; ?>">
                                                <button class="btn btn-outline-dark">See Item</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($count == 2) {
                                    break;
                                } ?>
                            <?php } ?>
                        <?php } ?>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <a href="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </a>
                        </div>
                    </section>
                    <hr>

                    <!-- Tools and Equipment -->
                    <section id="tools" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Tools and Equipment</span></h5>
                        </div>
                        <?php foreach ($productStore as $row) { ?>
                            <?php if ($row['category'] == "Tools") { ?>
                                <?php $count += 1; ?>
                                <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                                    <img src="../assets/Tools.png" alt="" class="item" style="max-width: 210px; max-height: 210px;">
                                    <div class="d-flex flex-column justify-content-center px-4">
                                        <h3 class="title"><?php echo $row['product_name'] ?></h3>
                                        <p class="desc"><?php echo $row['product_desc'] ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="m-0 text-danger">
                                                    <?php echo $row['stock'] > 15 ? "In Stock: {$row['stock']}" : "Only {$row['stock']} Left in Stock"; ?>
                                                </p>
                                                <p class="m-0 text-success">$<?php echo $row['price'] ?></p>
                                            </div>
                                            <a href="../index.php?id=<?php echo $row['product_id']; ?>">
                                                <button class="btn btn-outline-dark">See Item</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($count == 2) {
                                    break;
                                } ?>
                            <?php } ?>
                        <?php } ?>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <a href="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </a>
                        </div>
                    </section>
                </div>

                <!-- Side Navigation bar -->
                <div class="col-2 border-end border-2">
                    <nav id="side-nav" class="navbar position-sticky top-50 end-0">
                        <div class="container-fluid mx-4 border-start border-2">
                            <div class="">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-grid">
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary text-bold" href="#electronics">Electronics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary text-bold" href="#stationary">Stationary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary text-bold" href="#clothing" tabindex="-1">Clothing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary text-bold" href="#games" tabindex="-1">Games & Consoles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary text-bold" href="#furniture" tabindex="-1">Furniture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-secondary text-bold" href="#tools" tabindex="-1">Tools</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <?php include('../templates/footer.php'); ?>