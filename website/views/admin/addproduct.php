<?php include('../../templates/admin_header.php'); ?>

<body>
    <?php include('../../templates/admin_nav.php'); ?>

    <form class="container first forms d-grid justify-content-center align-items-center" action="../../index.php?product=add" method="post">
        <div class="container justify-content-center align-items-center p-4">
            <div class="d-flex justify-content-end">
                <h3 class="me-4">Add Product</h3>
                <div class="">
                    <button name="create" class="btn btn-outline-dark rounded">Add Product</button>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-between">
                <p class="me-4 my-2 ts-sm text-danger fw-bold"><?php echo !empty($productObj->errorMsg) ? $productObj->errorMsg['product_name'] : ""; ?></p>
                <label class="me-4 my-2 form-label fw-bold">Product Name</label>
                <input name="product_name" type="text" class="field px-2 m-0 p-0 rounded border border-secondary" placeholder="">
            </div>

            <div class=" my-4 d-flex justify-content-end">
                <div class="container d-flex justify-content-end">
                    <div class="row">
                        <div>
                            <p class="ts-sm text-danger m-0 fw-bold"><?php echo !empty($productObj->errorMsg) ? $productObj->errorMsg['category'] : ""; ?></p>
                            <input type="radio" id="male" name="category" value="Electronics">
                            <label for="electronics">Electronics & Devices</label><br>
                            <input type="radio" id="female" name="category" value="Stationary">
                            <label for="stationary">Stationary Tools</label><br>
                            <input type="radio" id="stationary" name="category" value="Clothing">
                            <label for="clothing">Clothing & Shoes</label><br>
                            <input type="radio" id="clothing" name="category" value="Furniture">
                            <label for="furniture">Furniture and Accessories</label><br>
                            <input type="radio" id="games" name="category" value="Games">
                            <label for="games">Games & Consoles</label><br>
                            <input type="radio" id="tools" name="category" value="Tools">
                            <label for="tools">Tools & Equipment</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold text-danger ts-sm"><?php echo !empty($productObj->errorMsg) ? $productObj->errorMsg['stock'] : ""; ?></label>
                <label class="me-4 my-2 form-label fw-bold">In Stock</label>
                <input name="stock" type="number" class="field px-2 m-0 p-0 rounded border border-secondary" placeholder="">
            </div>
            <div class=" my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold text-danger ts-sm"><?php echo !empty($productObj->errorMsg) ? $productObj->errorMsg['total_purchased'] : ""; ?></label>
                <label class="me-4 my-2 form-label fw-bold">Total Purchased</label>
                <input name="total_purchased" type="number" class="field px-2 m-0 p-0 rounded border border-secondary" placeholder="">
            </div>
            <div class="my-4 d-flex justify-content-between">
                <label class="me-4 my-2 form-label fw-bold text-danger ts-sm"><?php echo !empty($productObj->errorMsg) ? $productObj->errorMsg['price'] : ""; ?></label>
                <label class="me-4 my-2 form-label fw-bold">Price of Item</label>
                <input name="price" type="number" class="field px-2 m-0 p-0 rounded border border-secondary" placeholder="$">
            </div>
            <div class="my-4 d-flex flex-column justify-content-center align-items-end">
                <label class="form-label fw-bold text-danger ts-sm m-0"><?php echo !empty($productObj->errorMsg) ? $productObj->errorMsg['product_desc'] : ""; ?></label>
                <label class="form-label fw-bold">Product Description</label>
                <textarea name="product_desc" type="textarea" class="field px-2 p-2 rounded border border-secondary" placeholder="" cols="30" rows="3"></textarea>
            </div>
        </div>
    </form>
    <?php include('../../templates/footer.php');
