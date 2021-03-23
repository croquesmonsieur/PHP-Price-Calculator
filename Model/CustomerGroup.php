<?php
declare(strict_types=1);

class CustomerGroup
{
    private int $ID;
    private string $name;
    private int $parentID;
    private int $fixed_Discount;
    private int $variable_Discount;


    public function __construct( int $ID, $name, $parentID, $fixed_Discount, $variable_Discount )
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->parentID = $parentID;
        $this->fixed_Discount = $fixed_Discount;
        $this->variable_Discount = $variable_Discount;
    }

   
    public function getID(): int
    {
        return $this->ID;
    }

   
    public function getName(): string
    {
        return $this->name;
    }

   
    public function getParentID(): int
    {
        return $this->parentID;
    }


    public function getFixedDiscount(): int
    {
        return $this->fixed_Discount;
    }

    
    public function getVariableDiscount(): int
    {
        return $this->variable_Discount;
    }
    
    

}