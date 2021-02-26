<?php include('../templates/header.php'); ?>

<body>
    <form class="first forms d-grid justify-content-center align-items-center" action="../index.php?user=login" method="post">
        <div class="container d-grid justify-content-center align-items-center p-4 shadow rounded border">
            <div class="d-grid">
                <h2 class="text-center">Discount Variety</h2>
                <p class="px-2 m-2 text-center">Need an account? <a href="signup.php" class="px-2 text-success text-decoration-none">Sign up</a></p>
                <p class="px-2 text-center"><a href="../index.php?user=guest" class="px-2 text-success text-decoration-none">Login as a guest</a></p>
            </div>
            <div class="mb-3 d-grid">
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['login_error']) : ''; ?></p>
                <label class="form-label">Email</label>
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['email']) : ''; ?></p>
                <input name="email" type="email" class="field rounded border border-secondary" placeholder="">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Password</label>
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['pkey']) : ''; ?></p>
                <input name="pkey" type="password" class="field rounded border border-secondary" placeholder="">
            </div>
            <div class="py-2 d-grid">
                <button name="submit" class="btn btn-dark rounded">Sign in</button>
            </div>
        </div>
    </form>
</body>

</html>