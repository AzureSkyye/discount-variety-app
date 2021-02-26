<?php

class Order
{
    private $order_id;
    private $product_id;
    private $user_id;
    private $quantity;
    private $cost;
    private $shipping_address;
    private $first_name;
    private $last_name;

    public $errorMsg;

    public function __construct()
    {
        $this->purchased_item = '';
        $this->quantity = '';

        $this->errorMsg = array(
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'shipping_address' => '',
            'quantity' => '',
        );
    }

    public function getOrderID()
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

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;
    }
}
