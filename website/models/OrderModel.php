<?php

class OrderModel extends Database
{

    public function storeOrder($productID, $userID, $first_name, $last_name, $email, $cost, $shipping_address, $quantity)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare(
                "INSERT INTO orders(product_id, user_id, first_name, last_name, email, cost, shipping_address, quantity)
                 VALUES(?, ?, ?, ?, ?, ?, ?, ?)"
            );
            $sql->bind_param(
                'iisssisi',
                $productID,
                $userID,
                $first_name,
                $last_name,
                $email,
                $cost,
                $shipping_address,
                $quantity
            );
            $result = $sql->execute();
            $sql->close();
            if ($result) {
                $update = $conn->prepare("UPDATE products SET stock = stock - ?, total_sold = total_sold + ? WHERE product_id = ?");
                $update->bind_param('iii', $quantity, $quantity, $productID);
                $update->execute();
                $update->close();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function readUserHistory($userID)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare(
                "SELECT 
            orders.product_id, 
            products.product_name, 
            orders.quantity, 
            orders.cost, 
            orders.purchased_at
            FROM products INNER JOIN orders ON 
            orders.product_id = products.product_id and orders.user_id = ?"
            );
            $sql->bind_param('i', $userID);
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }
}
