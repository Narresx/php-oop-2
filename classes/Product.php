<?php 

class Product{
    public $name;
    public $brand;
    public $price;

    public function __construct($name, $brand, $price) 
{
 $this->name = $name;
 $this->brand = $brand;
 $this->price = $price;
}

public function getName() { return $this->name;}
public function getBrand() { return $this->brand;}
public function getPrice() { return $this->price;}

}

?>