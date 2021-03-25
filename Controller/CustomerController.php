<?php


class CustomerController
{
private PDO $pdo;

public function __construct(){
    $connection = new DataBase();
    $this->pdo = $connection->connect();
}

    public function getViewRender()
    {
        $customers = CustomerLoader::getCustomers($this->pdo);
        $products = ProductsLoader::getProducts($this->pdo);
        //$allGroups = CustomerGroupLoader::getAllCustomerGroups($this->pdo);
        //$Groups = CustomerGroupLoader::getGroups($this->pdo);
        $discounts = CustomerLoader::getCustomerDiscount($this->pdo);
        //$groups_discount = CustomerGroupLoader::getGroupDiscountPerCustomer($this->pdo);
        require 'View/CustomerView.php';
    }

}