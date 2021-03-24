<?php
declare(strict_types=1);

require_once "Model/Customer.php";
require_once  "Model/DataBase.php";



class CustomerLoader
{

//    private array $customerArray = [];

    public static function getCustomers(PDO $pdo): Array
    {
//        $DB =  new DataBase();
//        $conn = $DB->connect();
        $stmt = $pdo->query("SELECT firstname, lastname FROM customer  ORDER BY id");
//        $stmt->execute();

        $results = $stmt->fetchAll();


//        foreach ($results as $result ){
//             $result["firstname"]." ".$result["lastname"];
//        }
        return $results;
    }

}