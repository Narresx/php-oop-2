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
}

?>