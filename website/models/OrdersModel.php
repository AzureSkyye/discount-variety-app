<?php

class OrdersModel extends Database
{
    public function store($orderObj)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("INSERT INTO orders(product_id, user_id, quantity, cost) VALUES(?, ?, ?, ?)");
            $sql->bind_param(
                'iiii',
                $orderObj->getProductID(),
                $orderObj->getUserID(),
                $orderObj->getQuantity(),
                $orderObj->getCost()
            );
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readHistory($orderObj)
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("SELECT * FROM orders WHERE user_id = ?");
            $sql->bind_param('i', $orderObj->getUserID());
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
