<?php

declare(strict_types=1);

require_once "Loaders/CustomerLoader.php";
require_once "Loaders/ProductsLoader.php";

require_once  "Controller/CustomerController.php";
require_once "Controller/ProductsController.php";

require_once "Model/Customer.php";
require_once "Model/Products.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>

<h1>Home</h1>

<?php
 $controller = new CustomerController();
?>
 <p> <?php $controller->getCustomerList(); ?></p>


<hr>

<?php
$productControl = new ProductsController();
?>
<p> <?php $productControl->getProductList(); ?></p>

