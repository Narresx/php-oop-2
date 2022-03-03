<?php 

require_once __DIR__ .'./CreditCard.php';
class Client
{
    public $name;
    public $surname;
    public $age;
    public $CreditCard;

    public function __construct($name, $surname, $age, $CreditCard) 
{
 $this->name = $name;
 $this->surname = $surname;
 $this->age = $age;
 $this->CreditCard = $CreditCard;
}

public function getCreditCard() {
    return $this->CreditCard;
}

public function setCreditCard($CreditCard) {

if ($CreditCard instanceof CreditCard === false) {
    return;
} else {
    $this->CreditCard = $CreditCard;
}
}
public function getName() { return $this->name;}
public function getSurname() { return $this->surname;}
public function getAge() { return $this->age;}
}

?>