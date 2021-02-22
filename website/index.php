<?php
session_unset();
// Handlers
require_once('controllers/UserController.php');
require_once('controllers/ProductController.php');
require_once('controllers/OrdersController.php');

// User Handler
$userController = new UserController();
// Product Handler
$productController = new ProductController();
// Order Handler
$ordersController = new OrdersController();

// Handle the appropriate requests
try {

    // User Handler
    if (isset($_REQUEST['user'])) {
        switch ($_REQUEST['user']) {
            case "signup":
                $userController->userSignup();
                break;
            case "login":
                $userController->userLogin();
                break;
            case "logout":
                $userController->userLogout();
                break;
            case "guest":
                $userController->guestLogin();
                break;
            case "delete":
                $userController->deleteUser();
                break;
        }
    }

    // Product Handler
    if (isset($_REQUEST['product'])) {
        switch ($_REQUEST['product']) {
            case "add":
                $productController->addProduct();
                break;
            case "inventory":
                $productController->inventoryStore();
                break;
            case "delete":
                $productController->deleteProduct();
                break;
            case "edit":
                $productController->editProduct();
                break;
            case "update":
                $productController->updateProduct();
                break;
        }
    }

    if (isset($_REQUEST['id'])) {
        $productController->displayProduct();
    }

    if (isset($_REQUEST['category'])) {
        switch ($_REQUEST['category']) {
            case "Electronics":
                $productController->displayByCategory("electronics");
                break;
            case "Stationary":
                $productController->displayByCategory("stationary");
                break;
            case "Clothing":
                $productController->displayByCategory("clothing");
                break;
            case "Games":
                $productController->displayByCategory("games");
                break;
            case "Furniture":
                $productController->displayByCategory("furniture");
                break;
            case "Tools":
                $productController->displayByCategory("tools");
                break;
        }
    }
} catch (Exception $e) {
    throw $e;
}
