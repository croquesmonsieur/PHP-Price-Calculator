<?php
declare(strict_types=1);

class Customer
{
    private int $ID;
    private string $firstName;
    private string $lastName;
    private int $groupID;
    private int $fixedDiscount;
    private int $variableDiscount;


    public function __construct(int $id , $firstName, $lastName, $groupID, $fixedDiscount, $variableDiscount)
    {
        $this->ID = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->groupID = $groupID;
        $this->fixedDiscount = $firstName;
        $this->variableDiscount = $variableDiscount;
    }


    public function getID(): int
    {
        return $this->ID;
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
        return $this->groupID;
    }


    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }


    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }


}