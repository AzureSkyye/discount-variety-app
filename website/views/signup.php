<?php include('../templates/header.php'); ?>

<body>

    <form class="first forms d-grid justify-content-center align-items-center" action="../index.php?user=signup" method="post">
        <div class="container d-grid justify-content-center align-items-center p-4 shadow rounded border">
            <div class="d-grid">
                <h2 class="text-center">Discount Variety</h2>
                <p class="px-2 m-2 text-center">Already have an account?<a href="signin.php" class="px-2 text-success text-decoration-none">Sign in</a></p>
                <p class="px-2 mb-2 text-center"><a href="../index.php?user=guest" class="px-2 text-success text-decoration-none">Login as guest</a></p>
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">First Name</label>
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['first_name']) : ''; ?></p>
                <input name="first_name" type="text" class="field rounded border border-secondary" value="<?php echo $userObj->getFirstName(); ?>">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Last Name</label>
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['last_name']) : ''; ?></p>
                <input name="last_name" type="text" class="field rounded border border-secondary" value="<?php echo $userObj->getLastName(); ?>">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Email</label>
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['email']) : ''; ?></p>
                <input name="email" type="email" class="field rounded border border-secondary" value="<?php echo $userObj->getEmail(); ?>">
            </div>
            <div class="mb-3 d-grid">
                <label class="form-label">Password</label>
                <p class="text-danger"><?php echo !empty($userObj->errorMsg) ? htmlspecialchars($userObj->errorMsg['pkey']) : ''; ?></p>
                <input name="pkey" type="password" class="field rounded border border-secondary">
            </div>
            <div class="py-2 d-grid">
                <button name="submit" class="btn btn-dark rounded">Sign up</button>
            </div>
        </div>
    </form>
    <?php
    foreach ($userObj->errorMsg as $key => $value) {
        if (!empty($value)) {
            $userObj->errorMsg[$key] = ' ';
            print_r($userObj->errorMsg);
        }
    } ?>
</body>

</html>