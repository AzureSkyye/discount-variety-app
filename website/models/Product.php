<?php

class Product
{
    private $product_id;
    private $product_name;
    private $product_desc;
    private $category;
    private $price;
    private $total_purchased;
    private $stock;
    private $total_sold;

    public $errorMsg;

    public function __construct()
    {
        $this->product_name = '';
        $this->category = '';
        $this->price = '';
        $this->stock = '';

        $this->errorMsg = array(
            'product_name' => '',
            'product_desc' => '',
            'category' => '',
            'price' => '',
            'stock' => '',
            'total_purchased' => ''
        );
    }

    public function getProductID()
    {
        return $this->product_id;
    }

    public function setProductID($product_id)
    {
        $this->product_id = $product_id;
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    public function getProductDesc()
    {
        return $this->product_desc;
    }

    public function setProductDesc($product_desc)
    {
        $this->product_desc = $product_desc;
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

    public function getTotalPurchased()
    {
        return $this->total_purchased;
    }

    public function setTotalPurchased($total_purchased)
    {
        $this->total_purchased = $total_purchased;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getTotalSold()
    {
        return $this->total_sold;
    }

    public function setTotalSold($total_sold)
    {
        return $this->total_sold = $total_sold;
    }
}
