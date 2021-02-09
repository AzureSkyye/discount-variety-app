<?php include('../templates/header.php'); ?>


<body>
    <?php include('../templates/navbar.php'); ?>
    <section id="landing" class="sections">
        <div class="container">
            <div id="carouselControls" class="carousel carousel-dark slide shadow item" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselControls" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselControls" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselControls" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselControls" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselControls" data-bs-slide-to="4"></li>
                    <li data-bs-target="#carouselControls" data-bs-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column p-2 m-4">
                                <h1 class="px-4 py-2">Landing Section</h1>
                                <p class="px-4 py-2 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore esse beatae deserunt reprehenderit laborum atque
                                    magni perspiciatis quis nobis minima, ut nihil illo quibusdam quam iure praesentium consequuntur. Ratione, impedit.</p>
                            </div>
                            <img src="../assets/clothing.png" class="d-block" alt="..." style="width: 80%">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="../assets/devices.png" class="d-block" alt="..." style="width: 80%">
                            <div class="d-flex flex-column p-2 m-4">
                                <h1 class="px-4 py-2">Landing Section</h1>
                                <p class="px-4 py-2 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore esse beatae deserunt reprehenderit laborum atque
                                    magni perspiciatis quis nobis minima, ut nihil illo quibusdam quam iure praesentium consequuntur. Ratione, impedit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column p-2 m-4">
                                <h1 class="px-4 py-2">Landing Section</h1>
                                <p class="px-4 py-2 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore esse beatae deserunt reprehenderit laborum atque
                                    magni perspiciatis quis nobis minima, ut nihil illo quibusdam quam iure praesentium consequuntur. Ratione, impedit.</p>
                            </div>
                            <img src="../assets/stationary.png" class="d-block" alt="..." style="width: 80%">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="../assets/furniture.png" class="d-block" alt="..." style="width: 80%">
                            <div class="d-flex flex-column p-2 m-4">
                                <h1 class="px-4 py-2">Landing Section</h1>
                                <p class="px-4 py-2 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore esse beatae deserunt reprehenderit laborum atque
                                    magni perspiciatis quis nobis minima, ut nihil illo quibusdam quam iure praesentium consequuntur. Ratione, impedit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column p-2 m-4">
                                <h1 class="px-4 py-2">Landing Section</h1>
                                <p class="px-4 py-2 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore esse beatae deserunt reprehenderit laborum atque
                                    magni perspiciatis quis nobis minima, ut nihil illo quibusdam quam iure praesentium consequuntur. Ratione, impedit.</p>
                            </div>
                            <img src="../assets/games.png" class="d-block" alt="..." style="width: 80%">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="../assets/tools.png" class="d-block" alt="..." style="width: 80%">
                            <div class="d-flex flex-column p-2 m-4">
                                <h1 class="px-4 py-2">Landing Section</h1>
                                <p class="px-4 py-2 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore esse beatae deserunt reprehenderit laborum atque
                                    magni perspiciatis quis nobis minima, ut nihil illo quibusdam quam iure praesentium consequuntur. Ratione, impedit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Products Section -->
    <section id="products" class="sections">
        <div class="container">
            <div class="prod-head d-flex justify-content-center">
                <h3 class="fs-3 fw-bold">Browse by Category</h3>
            </div>

            <div class="mt-lg-5 mt-sm-4 card-group">
                <div class="row d-flex justify-content-around align-items-center">

                    <!-- Electronics Card -->
                    <div class="shadow p-0 m-4 item card col-lg-3 col-sm-12">
                        <button name="purchase" class="text-center position-relative border border-secondary position-absolute start-50 translate-middle p-2 bg-dark product text-white rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </button>
                        <img src="../assets/devices.png" alt="" class="card-img-top align-self-center" style="width: 70%">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 fw-bold">Laptops and Mobile Devices</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-dark d-flex justify-content-center align-items-center">
                            <form action="">
                                <button type="submit" class="btn btn-outline-light px-2">View Category</button>
                            </form>
                        </div>
                    </div>

                    <!-- Stationary Card -->
                    <div class="shadow p-0 m-4 item card col-lg-3 col-sm-12">
                        <button class="text-center position-relative border border-secondary position-absolute start-50 translate-middle p-2 bg-dark product text-white rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </button>
                        <img src="../assets/stationary.png" alt="" class="card-img-top align-self-center" style="width: 70%">
                        <div class="card-body text-center border-t border-2 border-secondary ">
                            <h5 class="card-title fs-5 fw-bold">Stationary Tools</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-dark d-flex justify-content-center align-items-center">
                            <form action="">
                                <button type="submit" class="btn btn-outline-light px-2">View Category</button>
                            </form>
                        </div>
                    </div>

                    <!-- Clothing Card -->
                    <div class="shadow p-0 m-4 item card col-lg-3 col-sm-12">
                        <button class="text-center position-relative border border-secondary position-absolute start-50 translate-middle p-2 bg-dark product text-white rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </button>
                        <img src="../assets/clothing.png" alt="" class="card-img-top align-self-center" style="width: 70%">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 fw-bold">Clothing and Shoes</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-dark d-flex justify-content-center align-items-center">
                            <form action="">
                                <button type="submit" class="btn btn-outline-light px-2">View Category</button>
                            </form>
                        </div>
                    </div>

                    <!-- Games and Consoles Card -->
                    <div class="shadow p-0 m-4 item card col-lg-3 col-sm-12">
                        <button class="text-center position-relative border border-secondary position-absolute start-50 translate-middle p-2 bg-dark product text-white rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </button>
                        <img src="../assets/games.png" alt="" class="card-img-top align-self-center" style="width: 70%">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 fw-bold">Video Games and Consoles</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-dark d-flex justify-content-center align-items-center">
                            <form action="">
                                <button type="submit" class="btn btn-outline-light px-2">View Category</button>
                            </form>
                        </div>
                    </div>

                    <!-- Furniture Card -->
                    <div class="shadow p-0 m-4 item card col-lg-3 col-sm-12">
                        <button class="text-center position-relative border border-secondary position-absolute start-50 translate-middle p-2 bg-dark product text-white rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </button>
                        <img src="../assets/furniture.png" alt="" class="card-img-top align-self-center" style="width: 70%">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 fw-bold">Furniture and Accessories</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-dark d-flex justify-content-center align-items-center">
                            <form action="">
                                <button type="submit" class="btn btn-outline-light px-2">View Category</button>
                            </form>
                        </div>
                    </div>

                    <!-- Tools Card -->
                    <div class="shadow p-0 m-4 item card col-lg-3 col-sm-12">
                        <button class="text-center position-relative border border-secondary position-absolute start-50 translate-middle p-2 bg-dark product text-white rounded-circle" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </button>
                        <img src="../assets/tools.png" alt="" class="card-img-top align-self-center" style="width: 70%">
                        <div class="card-body text-center">
                            <h5 class="card-title fs-5 fw-bold">Tools and Equipment</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-dark d-flex justify-content-center align-items-center">
                            <form action="">
                                <button type="submit" class="btn btn-outline-light px-2">View Category</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include('../templates/footer.php'); ?>