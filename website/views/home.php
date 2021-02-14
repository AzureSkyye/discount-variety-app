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
    <hr>

    <!-- Products Section -->
    <section id="products" class="sections r">
        <div class="container" data-bs-spy="scroll" data-bs-target="#side-nav">
            <div class="row d-flex justify-content-center">
                <div class="col-8">

                    <!-- Electronic Products -->
                    <section id="electronics" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Electronics</span></h5>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/devices.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Helios Predator 300</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/devices.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Triton Predator 300</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <form action="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </form>
                        </div>
                    </section>
                    <hr>

                    <!-- Stationary Products -->
                    <section id="stationary" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Stationary</span></h5>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/stationary.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Arteza Paint Brushes</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/stationary.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Arteza Acrylic Paint Set</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <form action="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </form>
                        </div>
                    </section>
                    <hr>

                    <!-- Clothing Section -->
                    <section id="clothing" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Clothing</span></h5>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/clothing.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Polo Shirts</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/clothing.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Under Armor Shoes</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <form action="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </form>
                        </div>
                    </section>
                    <hr>

                    <!-- Games and Console Section -->
                    <section id="games" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Games and Consoles</span></h5>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/games.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">PS5 Pro 512GB</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/games.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Legend of Zelda: Breath of the Wild</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <form action="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </form>
                        </div>
                    </section>
                    <hr>

                    <!-- Furniture -->
                    <section id="furniture" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Furniture and Accessories</span></h5>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/furniture.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Xtech Office Desk</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/furniture.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Serta Comfort Mattress</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <form action="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </form>
                        </div>
                    </section>
                    <hr>

                    <!-- Tools and Equipment -->
                    <section id="tools" class="pt-4">
                        <div class="mt-2">
                            <h5><span class="px-2 bg-dark text-light rounded">Tools and Equipment</span></h5>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/tools.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Wahl Bits Toolkit</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 p-0 d-flex justify-content-center align-items-center rounded shadow">
                            <img src="../assets/tools.png" alt="" class="item" style="width: 70%">
                            <div class="d-flex flex-column justify-content-center px-4">
                                <h3 class="title">Cat Constrution Set</h3>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="m-0 text-success">In Stock</p>
                                        <p class="m-0 text-danger">Price: $3000</p>
                                    </div>
                                    <form action="">
                                        <button class="btn btn-outline-dark">See Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 my-4 px d-flex justify-content-end">
                            <form action="" class="px-2">
                                <button class="btn btn-dark">View More</button>
                            </form>
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