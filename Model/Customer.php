<?php
declare(strict_types=1);

class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $group_id;
    private int $fixed_discount;
    private int $variable_discount;


    public function __construct(int $id , string $firstName, string $lastName, int $group_id, int $fixed_discount, int $variable_discount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group_id = $group_id;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
    }


    public function getID(): int
    {
        return $this->id;
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function getGroupID(): int
    {
        return $this->group_id;
    }


    public function getFixedDiscount(): int
    {
        return $this->fixed_discount;
    }


    public function getVariableDiscount(): int
    {
        return $this->variable_discount;
    }


}