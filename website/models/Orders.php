<?php

class Orders
{
    private $order_id;
    private $product_id;
    private $user_id;
    private $quantity;
    private $cost;

    public $purchase_error;

    public function __construct()
    {
        $this->purchased_item = '';
        $this->quantity = '';
        $this->purchase_error = array();
    }

    public function getPurchaseID()
    {
        return $this->order_id;
    }

    public function setOrderID($order_id)
    {
        $this->order_id = $order_id;
    }

    public function getProductID()
    {
        return $this->product_id;
    }

    public function setProductID($product_id)
    {
        $this->product_id = $product_id;
    }

    public function getuserID()
    {
        return $this->user_id;
    }

    public function setUserID($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}
