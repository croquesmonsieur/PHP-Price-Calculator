<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "Loaders/CustomerLoader.php";
require_once "Loaders/ProductsLoader.php";

require_once "Controller/CustomerController.php";

require_once "Model/Customer.php";
require_once "Model/Products.php";

$controller = new CustomerController();
$controller->getCustomerList();

$productControl = new CustomerController();
$productControl->getProductList();


