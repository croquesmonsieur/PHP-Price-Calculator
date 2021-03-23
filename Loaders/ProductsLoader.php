<?php


class ProductsLoader
{
    public static function getProducts(PDO $pdo): Array
    {
//        $DB =  new DataBase();
//        $conn = $DB->connect();
        $stmt = $pdo->query("SELECT p.name, p.price FROM product p  ORDER BY p.id");
//        $stmt->execute();

        $results = $stmt->fetchAll();

        var_dump($results);

        return $results;
    }


}