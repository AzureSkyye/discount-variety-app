<?php

// Can use either this or namespaces to get the appropriate objects.
require_once('controllers/UserController.php');
require_once('controllers/ProductController.php');
require_once('controllers/OrdersController.php');

$userController = new UserController();
$productController = new ProductController();
$ordersController = new OrdersController();
