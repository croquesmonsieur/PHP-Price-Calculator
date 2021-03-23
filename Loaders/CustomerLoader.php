<?php
declare(strict_types=1);

require_once "Model/Customer.php";
require_once  "Model/DataBase.php";



class CustomerLoader
{

//    private array $customerArray = [];

    public static function getCustomers(): Array
    {
        $DB =  new DataBase();
        $conn = $DB->connect();
        $stmt = $conn->query("SELECT firstname, lastname FROM customer  ORDER BY id");
//        $stmt->execute();

        $results = $stmt->fetchAll();

        var_dump($results);

        foreach ($results as $result ){
            echo $result["firstname"]." ".$result["lastname"];
        }
        return $results;
    }

}