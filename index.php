<?php

declare(strict_types=1);

require_once "Loaders/CustomerLoader.php";
require_once  "Controller/CustomerController.php";
require_once "Model/Customer.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>

<h1>Home</h1>

<?php
 $controller = new CustomerController();
?>
 <p> <?php $controller->getCustomerList(); ?></p>


