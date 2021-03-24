<?php

class ProductsController
{

    private PDO $pdo;

    public function __construct(){
        $connection = new DataBase();
        $this->pdo = $connection->connect();
    }

    public function getProductList()
    {
        $products = ProductsLoader::getProducts($this->pdo);
        require "View/CustomerView.php";
    }

}