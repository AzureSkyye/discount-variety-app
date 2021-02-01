<?php

class ProductModel extends Database
{
    public function create($prodObj)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("INSERT INTO products(product_name, category, price, stock) VALUES(?, ?, ?, ?");
            $sql->bind_param(
                'ssii',
                $prodObj->getProductName(),
                $prodObj->getCategory(),
                $prodObj->getPrice(),
                $prodObj->getStock()
            );
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function delete($prodObj)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("DELETE FROM products WHERE product_id = ?");
            $sql->bind_param('i', $prodObj->getProductID());
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function update($prodObj)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("UPDATE products SET product_name = ?, category = ?, price = ?, stock = ? WHERE product_id = ?");
            $sql->bind_param(
                'ssiii',
                $prodObj->getProductName(),
                $prodObj->getCategory(),
                $prodObj->getPrice(),
                $prodObj->getStock(),
                $prodObj->getProductID()
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

    public function readOne($prodObj)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("SELECT FROM products WHERE id = ?");
            $sql->bind_param('i', $prodObj->getProductID());
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return $result;
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }
}
