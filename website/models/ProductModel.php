<?php

require_once('models/DatabaseModel.php');

class ProductModel extends Database
{
    public function create($product_name, $category, $stock, $price, $product_desc)
    {
        try {
            $conn = $this->connect_db();

            // Reset auto-increment beginning at 1;
            $reset = "ALTER TABLE products AUTO_INCREMENT = 1";
            mysqli_query($conn, $reset);

            // Protect against sql injections
            $product_name = mysqli_real_escape_string($conn, $product_name);
            $category = mysqli_real_escape_string($conn, $category);
            $stock = mysqli_real_escape_string($conn, $stock);
            $price = mysqli_real_escape_string($conn, $price);
            $product_desc = mysqli_real_escape_string($conn, $product_desc);

            $sql = $conn->prepare("INSERT INTO products(product_name, category, stock, price, product_desc) VALUES(?, ?, ?, ?, ?)");
            $sql->bind_param(
                'ssiis',
                $product_name,
                $category,
                $stock,
                $price,
                $product_desc
            );
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function delete($productID)
    {
        try {
            $conn = $this->connect_db();

            // Reset auto-increment beginning at 1;
            $reset = "ALTER TABLE products AUTO_INCREMENT = 1";
            mysqli_query($conn, $reset);

            $sql = $conn->prepare("DELETE FROM products WHERE product_id = ?");
            $sql->bind_param('i', $productID);
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function update($product_name, $category, $price, $stock, $product_desc, $productID)
    {
        try {
            $conn = $this->connect_db();

            // Protect against sql injections
            $product_name = mysqli_real_escape_string($conn, $product_name);
            $category = mysqli_real_escape_string($conn, $category);
            $stock = mysqli_real_escape_string($conn, $stock);
            $price = mysqli_real_escape_string($conn, $price);
            $product_desc = mysqli_real_escape_string($conn, $product_desc);

            $sql = $conn->prepare("UPDATE products SET product_name = ?, category = ?, stock = ?, price = ?, product_desc = ? WHERE product_id = ?");
            $sql->bind_param(
                'ssiisi',
                $product_name,
                $category,
                $stock,
                $price,
                $product_desc,
                $productID
            );
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readAll()
    {
        try {
            $conn = $this->connect_db();
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readOne($productID)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
            $sql->bind_param('i', $productID);
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readCategory($category)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("SELECT * FROM products WHERE category = ?");
            $sql->bind_param('s', $category);
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
