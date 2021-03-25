<?php


class CustomerGroupLoader
{
    public static function getAllCustomerGroups(PDO $pdo): array
    {
        $stmt = $pdo->query("SELECT * FROM customer_group");
        $customerGroup = $stmt->fetchAll();

        $group_obj_array = [];
        foreach ($customerGroup as $group) {
            $group_obj_array[] = new CustomerGroup((int)$group['id'], $group['name'], (int)$group['parent_id'], (int)$group['fixed_discount'], (int)$group['variable_discount']);
        }
        return $group_obj_array;
    }

    public static function getGroupsDiscount(PDO $pdo): int
    {
        $customers = CustomerLoader::getCustomers($pdo);
        $groupArray = self::getAllCustomerGroups($pdo);
        $company = [];
        $client_group_id = 0;
        $group_discount = 0;
        foreach ($customers as $customer) {
            if ((int)$_POST['customer_detail'] === $customer->getID()) {
                $client_group_id = $customer->getGroupID();
                foreach ($groupArray as $group) {
                    if ($client_group_id === $group->getID()) {
                        if ($group->getFixedDiscount() === 0) {
                            $group_discount = $group->getVariableDiscount();
                        } else {
                            $group_discount = $group->getFixedDiscount();
                        }
                    }
                    $new_group_id = $group->getParentID();



                }
            }
        }
    }


    public static function getGroupNestedDiscount(PDO $pdo): int
    {

    }

    /*
    public static function getGroupsPerCustomer(PDO $pdo): array
    {
        $client_id = $_POST['customer_detail'];
        $stmt = $pdo->prepare("SELECT cg.name FROM customer_group cg left join customer c on cg.parent_id = c.group_id WHERE c.id = :id");
        $stmt->bindValue(':id', $client_id);
        $stmt->execute();

        $results = $stmt->fetchAll();
        var_dump($results);
        return $results;
    }

    public static function getGroupDiscountPerCustomer(PDO $pdo): array
    {
        if (empty($_POST['customer_detail'])) {
            $client_id = 0; //todo if no customer is selected ?
        }
        $client_id = $_POST['customer_detail'];
        $stmt = $pdo->prepare("SELECT SUM(cg.fixed_discount), MAX(cg.variable_discount) FROM customer_group cg left join customer c on cg.parent_id = c.group_id WHERE c.id = :id");
        $stmt->bindValue(':id', $client_id);
        $stmt->execute();
        $results = $stmt->fetchAll();


        var_dump($results);
        return $results;
    }

*/
}