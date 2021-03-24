<?php


class CustomerController
{
private PDO $pdo;

public function __construct(){
    $connection = new DataBase();
    $this->pdo = $connection->connect();
}

public function getCustomerList()
{
    $customers = CustomerLoader::getCustomers($this->pdo);
    var_dump($customers);
    require "View/CustomerView.php";
}

}