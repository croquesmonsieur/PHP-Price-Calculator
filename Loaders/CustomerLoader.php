<?php
declare(strict_types=1);

require_once "Model/Customer.php";
require_once  "Model/DataBase.php";



class CustomerLoader
{

    public static function getCustomers(PDO $pdo): Array
    {

        $stmt = $pdo->query("SELECT firstname, lastname FROM customer ORDER BY id");
        $results = $stmt->fetchAll();
        //var_dump($results);
        foreach ($results as $result ){
            echo $result["firstname"]." ".$result["lastname"];
        }
        return $results;
    }

    public static function getCustomerDiscount(PDO $pdo){
        $stmt = $pdo->prepare("SELECT c2.name FROM customer_group c2 LEFT JOIN customer c on c2.group_id = c.");
    }

}
