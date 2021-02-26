<?php
session_unset();

require_once('controllers/UserController.php');
require_once('controllers/ProductController.php');
require_once('controllers/OrderController.php');

// Create controller objects
$userController = new UserController();
$productController = new ProductController();
$orderController = new OrderController();

// Handle the appropriate requests
try {

    // User Handler
    if (isset($_REQUEST['user'])) {
        switch ($_REQUEST['user']) {
            case "signup":
                $userController->userSignup();
                break;
            case "login":
                $productController->inventoryStore();
                $userController->userLogin();
                break;
            case "logout":
                $userController->userLogout();
                break;
            case "guest":
                $productController->inventoryStore();
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
            case "read_all":
                $productController->redirect();
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
            case 'search':
                $productController->searchProduct();
            case 'admin_search':
                $productController->searchInventory();
        }
    } else if (isset($_REQUEST['item_id'])) {
        $productController->displayProduct();
    } else if (isset($_REQUEST['report_id'])) {
        $productController->saleReport();
    } else if (isset($_REQUEST['category'])) {
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

    // Order handler
    if (isset($_REQUEST['order'])) {
        $orderController->placeOrder();
        $productController->inventoryStore();
    } else if (isset($_REQUEST['my_id'])) {
        $orderController->redirect();
    }
} catch (Exception $e) {
    throw $e;
}
