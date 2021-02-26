<?php include('../templates/header.php'); ?>

<body>
    <?php include("../templates/navbar.php"); ?>
    <form class="container first forms d-grid justify-content-center align-items-center" action="../index.php?order=confirm" method="post">
        <div class="container justify-content-center align-items-center p-4">
            <div class="d-flex justify-content-between">
                <h3 class="">Confirm Information</h3>
                <div class="">
                    <button name="submit" class="btn btn-outline-dark rounded">Confirm Order</button>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">First Name</label>
                <input name="first_name" type="text" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $userObj->getFirstName(); ?>">

            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Last Name</label>
                <input name="last_name" type="text" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $userObj->getLastName(); ?>">
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Email</label>
                <input name="email" type="text" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $userObj->getEmail(); ?>">
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Shipping Address</label>
                <input name="shipping_address" type="" class="field px-2 m-0 p-0 rounded border border-secondary">
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Quantity</label>
                <input name="quantity" type="number" class="field px-2 m-0 p-0 rounded border border-secondary">
            </div>

            <!-- Set the other properties -->
            <input name="cost" type="hidden" value="<?php echo $productObj->getPrice(); ?>">
            <input name="stock" type="hidden" value="<?php echo $productObj->getStock(); ?>">
            <input name="user_id" type="hidden" value="<?php echo $userObj->getUserID(); ?>">
            <input name="product_id" type="hidden" value="<?php echo $productObj->getProductID(); ?>">

        </div>
    </form>

    <?php include('../templates/footer.php'); ?>