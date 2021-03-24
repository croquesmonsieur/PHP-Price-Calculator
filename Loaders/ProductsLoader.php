<?php


class ProductsLoader
{
    public static function getProducts(PDO $pdo): Array
    {
//        $DB =  new DataBase();
//        $conn = $DB->connect();
        $stmt = $pdo->query("SELECT p.name, price FROM product p  ORDER BY p.id");
//        $stmt->execute();

        $results = $stmt->fetchAll();


        return $results;
    }


}