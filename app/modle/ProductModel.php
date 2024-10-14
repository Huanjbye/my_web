<?php
// app/models/ProductModel.php

class ProductModel {
    private $conn;
    private $table_name = "products";

    // Constructor to accept the database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Method to get all products
    public function getAllProducts() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Method to get a product by its ID
    public function getProductById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
