<?php 

class Client{
    public $name;
    public $surname;
    public $age;

    public function __construct($name, $surname, $age) 
{
 $this->name = $name;
 $this->surname = $surname;
 $this->age = $age;
}
}

?>