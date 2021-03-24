<?php
declare(strict_types=1);

class Products
{

    private int $ID;
    private string $name;
    private int $price;

    public function __construct( int $ID, string $name, int $price)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->price = $price;
    }


    public function getID(): int
    {
        return $this->ID;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getPrice(): int
    {
        return $this->price;
    }


}