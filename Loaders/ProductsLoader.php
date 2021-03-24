<?php


class ProductsLoader
{
    public static function getProducts(PDO $pdo): array
    {
        $stmt = $pdo->query("SELECT * FROM product p ORDER BY p.id");
        $productList = $stmt->fetchAll();

        $product_items = [];
        foreach ($productList as $product){
            $product_items[] = new Products((int)$product['id'], $product['name'], (int)$product['price']);
        }

        return $product_items;
    }


}
/*

*/