<?php 

require_once __DIR__ .'./Client.php';
require_once __DIR__ .'./Product.php';

class CreditCard{
    public $number;
    public $credit;

    public function __construct($number, $credit) 
{
 $this->number = $number;
 $this->credit = $credit;
}

public function getNumber() { return $this->Number;}
public function getCredit() { return $this->credit;}


public function pay($product, $registered) {
    if($registered === null){
        $valor = $product->price;
        if(!is_numeric($valor) || $valor <= 0 || $this->credit < $valor) return;
        $this->credit -= $valor; 
    }
    else {
        $valor = $product->price*0.8;
        if(!is_numeric($valor) || $valor <= 0 || $this->credit < $valor) return;
        $this->credit -= $valor;
    }
}

}
?>