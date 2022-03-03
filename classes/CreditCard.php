<?php 
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

public function pay($valor) {
    if(!is_numeric($valor) || $valor <= 0 || $this->credit < $valor) return;
    $this->credit -= $valor;
}

}
?>