<?php
declare(strict_types=1);

require_once "Model/Customer.php";
require_once  "Model/DataBase.php";



class CustomerLoader
{

//    private array $customerArray = [];

    public static function getCustomers(PDO $pdo): Array
    {

        $stmt = $pdo->query("SELECT * FROM customer ORDER BY id");
        $customersList = $stmt->fetchAll();

        $customers_obj_list = [];
        foreach ($customersList as $customer){
            $customers_obj_list[] = new Customer((int)$customer['id'], $customer['firstname'], $customer['lastname'], (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
        return $customers_obj_list;
    }
/*
    public static function getCustomerDiscount(PDO $pdo, $id){
        $stmt = $pdo->prepare("SELECT c.firstname, c.lastname FROM customer c left JOIN customer_group cg on c.group_id = cg.parent_id where ISNULL(cg.name) and c.id =:id");
        $result = $stmt->bindValue(':id',  );
    }
*/
}