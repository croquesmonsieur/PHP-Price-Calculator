<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "Loaders/CustomerLoader.php";
require_once "Loaders/ProductsLoader.php";
require_once "Loaders/CustomerGroupLoader.php";

require_once "Controller/CustomerController.php";

require_once "Model/Customer.php";
require_once "Model/CustomerGroup.php";
require_once "Model/DataBase.php";
require_once "Model/Products.php";

$pdo = new DataBase();
$controller = new CustomerController();
$controller->getViewRender();

if (isset($_POST['calculate_button'])){
    $client = $_POST['customer_detail'];
    $item = $_POST['product_detail'];

}






