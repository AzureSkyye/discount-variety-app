<?php include('../../templates/admin_header.php'); ?>

<body>
    <?php include('../../templates/admin_nav.php'); ?>

    <form class="container first forms d-grid justify-content-center align-items-center" action="../../index.php?product=update" method="post">
        <input type="hidden" name="product_id" value="<?php echo $productObj->getProductID(); ?>">
        <div class="container justify-content-center align-items-center p-4">
            <div class="d-flex justify-content-end">
                <h3 class="me-4">Update Product</h3>
                <div class="">
                    <button name="update" class="btn btn-outline-dark rounded">Update</button>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Product Name</label>
                <input name="product_name" type="text" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $productObj->getProductName(); ?>">
            </div>

            <div class="my-4 d-flex justify-content-end">
                <div class="container d-flex justify-content-end">
                    <div class="row">
                        <div>
                            <input name="category" <?php echo $productObj->getCategory() == "Electronics" ?  "checked" : ""; ?> type="radio" id="electronics" value="Electronics">
                            <label for="electronics">Electronics & Devices</label><br>
                            <input name="category" <?php echo $productObj->getCategory() == "Stationary" ?  "checked" : ""; ?> type="radio" id="stationary" value="Stationary">
                            <label for="stationary">Stationary Tools</label><br>
                            <input name="category" <?php echo $productObj->getCategory() == "Clothing" ?  "checked" : ""; ?> type="radio" id="clothing" value="Clothing">
                            <label for="clothing">Clothing & Shoes</label><br>
                            <input name="category" <?php echo $productObj->getCategory() == "Furniture" ?  "checked" : ""; ?> type="radio" id="furniture" value="Furniture">
                            <label for="furniture">Furniture and Accessories</label><br>
                            <input name="category" <?php echo $productObj->getCategory() == "Games" ?  "checked" : ""; ?> type="radio" id="games" value="Games">
                            <label for="games">Games & Consoles</label><br>
                            <input name="category" <?php echo $productObj->getCategory() == "Tools" ?  "checked" : ""; ?> type="radio" id="tools" value="Tools">
                            <label for="tools">Tools & Equipment</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">In Stock</label>
                <input name="stock" type="number" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $productObj->getStock(); ?>">
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Total Purchased</label>
                <input name="total_purchased" type="number" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $productObj->getTotalPurchased(); ?>">
            </div>
            <div class=" my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold">Price of Item</label>
                <input name="price" type="number" class="field px-2 m-0 p-0 rounded border border-secondary" value="<?php echo $productObj->getPrice(); ?>">
            </div>
            <div class="my-4 d-flex flex-column justify-content-center align-items-end">
                <label class="form-label fw-bold">Product Description</label>
                <textarea name="product_desc" type="textarea" class="field px-2 p-2 rounded border border-secondary" cols="30" rows="3"><?php echo trim($productObj->getProductDesc()); ?></textarea>
            </div>
        </div>
    </form>
    <?php include('../../templates/footer.php');
