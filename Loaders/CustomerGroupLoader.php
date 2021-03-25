<?php


class customerGroupLoader
{

    public static function getAllCustomersGroup(PDO $pdo): Array
    {
        $stmt = $pdo->query("SELECT * FROM customer_group ORDER BY id");
        $customersGroupList = $stmt->fetchAll();

        $customersGroup_obj_list = [];
        foreach ($customersGroupList as $customerGroup){
            $customersGroup_obj_list[] = new CustomerGroup((int)$customerGroup['ID'], $customerGroup['name'],(int)$customerGroup['parentID'] );
        }
        return $customersGroup_obj_list;
    }
}


