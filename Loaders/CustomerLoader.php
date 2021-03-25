<?php
declare(strict_types=1);

//require_once "Model/Customer.php";
//require_once "Model/DataBase.php";


class CustomerLoader
{

    public static function getCustomers(PDO $pdo): array
    {

        $stmt = $pdo->query("SELECT * FROM customer ORDER BY id");
        $customersList = $stmt->fetchAll();

        $customers_obj_list = [];
        foreach ($customersList as $customer) {
            $customers_obj_list[] = new Customer((int)$customer['id'], $customer['firstname'], $customer['lastname'], (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
        return $customers_obj_list;
    }

    public static function getCustomerDiscount(PDO $pdo): int
    {
        $customers = self::getCustomers($pdo);
        $client_discount = 0;

        foreach ($customers as $customer) {
            if ((int)$_POST['customer_detail'] === $customer->getID()) {
                if ($customer->getFixedDiscount() === 0) {
                    $client_discount = $customer->getVariableDiscount();
                } else {
                    $client_discount = $customer->getFixedDiscount();
                }
            }
        }
        return $client_discount;
    }

    /*
        public static function getCustomerDiscount(PDO $pdo): array
        {
            if (empty($_POST['customer_detail'])) {
                $client_id = 0; //todo if no customer is selected ?
            }
            $client_id = $_POST['customer_detail'];
            $stmt = $pdo->prepare("SELECT c.id, c.fixed_discount, c.variable_discount FROM customer c WHERE c.id = :id");
            $stmt->bindValue(':id', $client_id);
            $stmt->execute();
            $results = $stmt->fetchAll();
            var_dump($results);
            return $results;
        }
    */
    /*
        public static function getCustomerDiscount(PDO $pdo):? string
        {
            $client_id = $_POST['customer_detail'];
            if ($customer['fixed_discount'] === null){
                $client_discount = $customer['variable_discount'];
            } else {
                $client_discount = $customer['fixed_discount'];
            }
            var_dump($client_discount);
            return $client_discount;
        }
    */
}


