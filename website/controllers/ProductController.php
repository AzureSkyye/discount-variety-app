<?php
require('models/Product.php');
require('models/ProductModel.php');
require_once('models/DatabaseModel.php');

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

class ProductController
{
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->inventoryStore();
    }

    public function validateProductFields($product)
    {
        try {

            // Set Product ID
            $product->setProductID($_POST['product_id']);

            if (empty($_POST['product_name'])) {
                $product->errorMsg['product_name'] = "Field cannot be empty";
            } else {
                $product->setProductName(trim($_POST['product_name']));
            }

            if (empty($_POST['product_desc'])) {
                $product->errorMsg['product_desc'] = "Field cannot be empty";
            } else {
                $product->setProductDesc(trim($_POST['product_desc']));
            }

            if (empty($_POST['category'])) {
                $product->errorMsg['category'] = "A category must be selected";
            } else {
                $product->setCategory(trim($_POST['category']));
            }

            if (empty($_POST['stock'])) {
                $product->errorMsg['stock'] = "Field cannot be empty";
            } else {

                try {
                    $product->setStock(intval($_POST['stock']));
                } catch (Exception $e) {
                    $product->errorMsg['stock'] = "Enter a valid number";
                    throw $e;
                }
            }

            if (empty($_POST['price'])) {
                $product->errorMsg['price'] = "Field cannot be empty";
            } else {
                try {
                    $product->setPrice(intval($_POST['price']));
                } catch (Exception $e) {
                    $product->errorMsg['price'] = "Enter a valid number";
                    throw $e;
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function addProduct()
    {
        try {
            $product = new Product();
            if (isset($_POST['create'])) {
                // Set product properties
                $this->validateProductFields($product);
                $errorArr = $product->errorMsg;

                // Unset key values
                foreach ($errorArr as $key => $value) {
                    if (empty($value)) {
                        unset($errorArr[$key]);
                    }
                }
                // Check for errors before adding
                if (!empty($errorArr)) {
                    $_SESSION['productObj'] = serialize($product);
                    header('Location: views/admin/addproduct.php');
                } else {
                    // Create the product
                    $this->productModel->create(
                        $product->getProductName(),
                        $product->getCategory(),
                        $product->getStock(),
                        $product->getPrice(),
                        $product->getProductDesc(),
                        $product->getProductID()
                    );
                    // Update inventory store
                    $this->inventoryStore();
                    header('Location: views/admin/inventory.php');
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function deleteProduct()
    {
        try {
            if (isset($_POST['delete_product'])) {
                $this->productModel->delete($_POST['product_id']);
                $this->inventoryStore();
                header('Location: views/admin/inventory.php');
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function inventoryStore()
    {
        try {
            // Load all of the product objects properties
            $productStore = $this->productModel->readAll();
            $_SESSION['productStore'] = serialize($productStore);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function editProduct()
    {
        try {
            $productObj = new Product();
            if (isset($_POST['edit'])) {

                // This is to let inputs persist when editing
                $productObj->setProductID($_POST['product_id']);
                $productObj->setProductName($_POST['product_name']);
                $productObj->setCategory($_POST['category']);
                $productObj->setStock($_POST['stock']);
                $productObj->setPrice($_POST['price']);
                $productObj->setProductDesc($_POST['product_desc']);

                $_SESSION['productObj'] = serialize($productObj);
                header('Location: views/admin/updateproduct.php');
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function updateProduct()
    {
        try {
            $existingProduct = new Product();
            if (isset($_POST['update'])) {
                // Set product properties
                $existingProduct->setProductID($_POST['product_id']);
                $this->validateProductFields($existingProduct);
                $errorArr = $existingProduct->errorMsg;

                // Unset key values
                foreach ($errorArr as $key => $value) {
                    if (empty($value)) {
                        unset($errorArr[$key]);
                    }
                }

                // Check for errors before updating
                if (!empty($errorArr)) {
                    $_SESSION['productObj'] = serialize($existingProduct);
                    header('Location: views/admin/updateproduct.php');
                } else {
                    // Update the product
                    $this->productModel->update(
                        $existingProduct->getProductName(),
                        $existingProduct->getCategory(),
                        $existingProduct->getStock(),
                        $existingProduct->getPrice(),
                        $existingProduct->getProductDesc(),
                        $existingProduct->getProductID()
                    );
                    // Update inventory store
                    $this->inventoryStore();
                    header('Location: views/admin/inventory.php');
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function displayProduct()
    {
        try {
            $productObj = new Product();
            $productArr = $this->productModel->readOne($_GET['id']);
            foreach ($productArr as $row) {
                $productObj->setProductName($row['product_name']);
                $productObj->setCategory($row['category']);
                $productObj->setStock($row['stock']);
                $productObj->setPrice($row['price']);
                $productObj->setProductDesc($row['product_desc']);
            }
            $_SESSION['productObj'] = serialize($productObj);
            header("Location: views/product.php?item={$_GET['id']}");
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function displayByCategory($category)
    {
        try {
            $productArr = $this->productModel->readCategory($category);
            $_SESSION['categoryStore'] = serialize($productArr);

            header("Location: views/category.php?in=$category");
        } catch (Exception $e) {
            throw $e;
        }
    }
}
