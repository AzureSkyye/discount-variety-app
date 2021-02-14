<?php include('../templates/header.php'); ?>

<body>

    <form class="first forms d-grid justify-content-center align-items-center" action="" method="post">
        <div class="container d-grid justify-content-center align-items-center p-4">
            <div class="d-grid">
                <h2 class="text-center">Discount Variety</h2>
                <p class="px-2 text-center">Already have an account? <a href="signin.php" class="px-2 text-success text-decoration-none">Sign in</a></p>
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">First Name</label>
                <input type="text" class="field rounded border border-secondary" placeholder="">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Last Name</label>
                <input type="text" class="field rounded border border-secondary" placeholder="">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Email</label>
                <input type="email" class="field rounded border border-secondary" placeholder="">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Password</label>
                <input type="password" class="field rounded border border-secondary" placeholder="">
            </div>
            <div class="py-2 d-grid">
                <button class="btn btn-dark rounded">Sign up</button>
            </div>
        </div>
    </form>
</body>

</html>