<?php

include('../../models/Orders.php');
include('../../models/Product.php');
include('../../models/User.php');
session_start();

// User Objects
$userObj = isset($_SESSION['userObj']) ? unserialize($_SESSION['userObj']) : new User();
$userStore = isset($_SESSION['userStore']) ? unserialize($_SESSION['userStore']) : NULL;

// Product Objects
$productObj = isset($_SESSION['productObj']) ? unserialize($_SESSION['productObj']) : new Product();
$productStore = isset($_SESSION['productStore']) ? unserialize($_SESSION['productStore']) : NULL;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Variety</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Our Stylesheet -->
    <link rel="stylesheet" href="../../styles/styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Roboto&display=swap" rel="stylesheet">

</head>