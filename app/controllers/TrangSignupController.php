<?php
// app/controllers/TrangDienThoaiController.php

// Include the database configuration and product model
require_once __DIR__ . '../modle/ProductModel.php';
require_once __DIR__ . '../../libraries/databaes.php';

// Create a new database connection
$database = new Database();
$db = $database->getConnection();

// Create a new instance of the product model
$productModel = new ProductModel($db);

// Fetch all products
$products = $productModel->getAllProducts();

// Load the view and pass the products data to it
require __DIR__ . '../views/trang_singup.php';
?>
