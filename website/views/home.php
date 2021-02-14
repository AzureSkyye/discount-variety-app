<?php include('../templates/header.php'); ?>


<body>
    <?php include('../templates/navbar.php'); ?>
    <?php include('../templates/landing.php'); ?>
    <?php include('../templates/categories.php'); ?>

    <!-- Products Section -->
    <div id="products" class="container border-end border-3 border-secondary" data-bs-spy="scroll" data-bs-target="#side-nav">
        <div class="row">
            <div class="col-10 border-end border-3 border-secondary">
                <hr>

                <!-- Electronic Products -->
                <div id="electronics">
                    <h5><span class="px-2 bg-dark text-light rounded">Electronics</span></h5>
                </div>
                <div class="my-1 p-0 d-flex justify-content-center align-items-center border-bottom border-3 border-secondary">
                    <img src="../assets/devices.png" alt="" class="item" style="width: 70%">
                    <div class="d-flex flex-column justify-content-center px-4">
                        <h1 class="title">Helios Predator 300</h1>
                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 text-success">In Stock</p>
                                <p class="m-0 text-danger">Price: $3000</p>
                            </div>
                            <form action="">
                                <button class="btn btn-outline-dark">Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="my-1 p-0 d-flex justify-content-center border-bottom border-3 border-secondary align-items-center">
                    <img src="../assets/devices.png" alt="" class="item" style="width: 70%">
                    <div class="d-flex flex-column justify-content-center px-4">
                        <h1 class="title">Triton Predator 300</h1>
                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 text-success">In Stock</p>
                                <p class="m-0 text-danger">Price: $3000</p>
                            </div>
                            <form action="">
                                <button class="btn btn-outline-dark">Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="m-2 d-flex justify-content-center">
                    <form action="">
                        <button class="btn btn-dark">View More</button>
                    </form>
                </div>
                <hr>

                <!-- Stationary Products -->
                <div id="stationary">
                    <h5><span class="px-2 bg-dark text-light rounded">Stationary</span></h5>
                </div>
                <div class="my-1 p-0 d-flex justify-content-center align-items-center border-bottom border-3 border-secondary">
                    <img src="../assets/stationary.png" alt="" class="item" style="width: 70%">
                    <div class="d-flex flex-column justify-content-center px-4">
                        <h1 class="title">Arteza Paint Brushes</h1>
                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 text-success">In Stock</p>
                                <p class="m-0 text-danger">Price: $3000</p>
                            </div>
                            <form action="">
                                <button class="btn btn-outline-dark">Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="my-1 p-0 d-flex justify-content-center border-bottom border-3 border-secondary align-items-center">
                    <img src="../assets/stationary.png" alt="" class="item" style="width: 70%">
                    <div class="d-flex flex-column justify-content-center px-4">
                        <h1 class="title">Arteza Acrylic Paint Set</h1>
                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti reprehenderit culpa iure, mollitia explicabo cumque omnis. Voluptatem harum eius neque deserunt quam minima dolorum, numquam corrupti esse? Odit, molestiae perferendis.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0 text-success">In Stock</p>
                                <p class="m-0 text-danger">Price: $3000</p>
                            </div>
                            <form action="">
                                <button class="btn btn-outline-dark">Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="m-2 d-flex justify-content-center">
                    <form action="">
                        <button class="btn btn-dark">View More</button>
                    </form>
                </div>
            </div>

            <!-- Side Navigation bar -->
            <div class="col-2">
                <nav id="side-nav" class="navbar position-sticky top-50 end-0">
                    <div class="container-fluid mx-4">
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

    <?php include('../templates/footer.php'); ?>