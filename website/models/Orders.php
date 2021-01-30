<?php

class Orders
{
    private $purchase_id;
    private $product_id;
    private $user_id;
    private $quantity;
    private $cost;

    public $purchase_error;

    public function __construct()
    {
        $this->purchased_item = '';
        $this->quantity = '';
    }

    public function getPurchaseID()
    {
        return $this->purchase_id;
    }

    public function getProductID()
    {
        return $this->product_id;
    }

    public function getuserID()
    {
        return $this->user_id;
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
