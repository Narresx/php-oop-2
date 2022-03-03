<?php 

require_once __DIR__ .'./CreditCard.php';
require_once __DIR__ .'./Product.php';


class Client
{
    public $name;
    public $surname;
    public $age;
    public $CreditCard;
    public $registered;
    public $discounts;

    public function __construct($name, $surname, $age, $CreditCard, $registered = null) 
{
 $this->name = $name;
 $this->surname = $surname;
 $this->age = $age;
 $this->CreditCard = $CreditCard;
 $this->registered = $registered;

}

public function getDiscount() { return $this->discounts;}

public function getRegistered() { return $this->registered; }

public function getProduct(){
    return $this->product;
}

public function setProduct($product) {
    if ($product instanceof Product === false) {
        return;
    } else {
        $this->product = $product;
    }
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

public function isRegistered($discounts){
    if ($this->registered=== true) {
        return $discounts =  20;
    } else { return $discounts=null;}
}
public function getName() { return $this->name;}
public function getSurname() { return $this->surname;}
public function getAge() { return $this->age;}
}

?>