<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mx-4">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../home.php">Discount Variety</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../home.php?#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" tabindex="-1">Contact</a>
                </li>
                <form action="../../index.php?product=admin_search" method="post" class="d-flex">
                    <input name="searchTerm" class="form-control mx-2" type="search" placeholder="Search Inventory" aria-label="Search">
                    <button name="admin_search" class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php?product=read_all" tabindex="-1">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php" tabindex="-1">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addproduct.php" tabindex="-1">Add Item</a>
                    </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center px-2">
                    <svg class="text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 40px">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <small class="pe-3 ps-2 text-secondary align-self-center"><?php echo $userObj->getFirstName(); ?></small>
                    <a class="text-secondary text-decoration-none" href="../../index.php?user=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>