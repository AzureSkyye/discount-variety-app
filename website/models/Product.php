<?php

class Product
{
    private $product_id;
    private $product_name;
    private $category;
    private $price;
    private $stock;

    public $product_error;

    public function __construct()
    {
        $this->product_name = '';
        $this->category = '';
        $this->price = '';
        $this->stock = '';
        $this->product_error = array();
    }

    public function getProductID()
    {
        return $this->product_id;
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock()
    {
        return $this->stock;
    }
}
