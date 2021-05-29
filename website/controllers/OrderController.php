<?php

require('models/Order.php');
require('models/OrderModel.php');
require_once('models/DatabaseModel.php');

class OrderController
{
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function userHistory()
    {
        try {
            $orderArr = $this->orderModel->readUserHistory($_GET['my_id']);
            $_SESSION['orderObj'] = serialize($orderArr);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function redirect()
    {
        try {
            $this->userHistory();
            header('Location: views/my.php');
        } catch (Exception $e) {
            throw $e;
        }
    }



    public function verifyOrderCredentials($orderObj)
    {
        try {
            if (isset($_POST['submit'])) {
                // Set the IDs
                $orderObj->setProductID($_POST['product_id']);
                $orderObj->setUserID($_POST['user_id']);

                if (empty($_POST['first_name'])) {
                    $orderObj->errorMsg['first_name'] = "Field cannot be empty";
                } else {
                    $orderObj->setFirstName(trim($_POST['first_name']));
                }
                if (empty($_POST['last_name'])) {
                    $orderObj->errorMsg['last_name'] = "Field cannot be empty";
                } else {
                    $orderObj->setLastName(trim($_POST['last_name']));
                }
                if (empty($_POST['email'])) {
                    $orderObj->errorMsg['email'] = "Email Field cannot be empty";
                } else {
                    $orderObj->setEmail(trim($_POST['email']));
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $orderObj->errorMsg['email'] = 'Invalid email';
                    }
                }
                if (empty($_POST['shipping_address'])) {
                    $orderObj->errorMsg['shipping_address'] = "Shipping Address cannot be empty";
                } else {
                    $orderObj->setShippingAddress(trim($_POST['shipping_address']));
                }
                if (empty($_POST['quantity'])) {
                    $orderObj->errorMsg['quantity'] = "Quantity cannot be empty";
                } else {
                    $orderObj->setQuantity(trim($_POST['quantity']));
                    // Set cost
                    $orderObj->setCost(trim($orderObj->getQuantity() * $_POST['cost']));
                    if ($orderObj->getQuantity() > $_POST['stock']) {
                        $orderObj->errorMsg['quantity'] = "Quantity exceeds items in stock";
                    }
                    if ($orderObj->getQuantity() <= 0) {
                        $orderObj->errorMsg['quantity'] = "Quantity must be at least 1";
                    }
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function placeOrder()
    {
        try {
            $orderObj = new Order();

            // Set properties
            $this->verifyOrderCredentials($orderObj);

            // Check for errors
            $errorArr = $orderObj->errorMsg;
            foreach ($errorArr as $key => $value) {
                if (empty($value)) {
                    unset($errorArr[$key]);
                }
            }

            if (!empty($errorArr)) {
                header('Location: views/order.php');
            } else {
                $this->orderModel->storeOrder(
                    $orderObj->getProductID(),
                    $orderObj->getUserID(),
                    $orderObj->getFirstName(),
                    $orderObj->getLastName(),
                    $orderObj->getEmail(),
                    $orderObj->getCost(),
                    $orderObj->getShippingAddress(),
                    $orderObj->getQuantity()
                );

                // Initialize Order object
                $orderArr = $this->orderModel->readUserHistory($_POST['user_id']);
                $_SESSION['orderObj'] = serialize($orderArr);
                header('Location: views/my.php');
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
}
