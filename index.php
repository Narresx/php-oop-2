<?php 
/* 
Traccia:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
*/

require_once __DIR__ .'./classes/Client.php';
require_once __DIR__ .'./classes/CreditCard.php';
require_once __DIR__ .'./classes/Product.php';

$product1 = new Product('Dog treats', 'Milk Bone', 25);
$product2 = new Product('Dog ball', 'Kong', 10);
$product3 = new Product('Dog house', 'Suncast', 135);
$product4 = new Product('Dog leash', 'PetSafe', 20);


$clientCredit= new CreditCard('1518', 500);
$client = new Client('Pippo', 'Baudo', 60, $clientCredit);

var_dump($client->CreditCard);

var_dump($client->CreditCard->pay($product1));

var_dump($client->CreditCard);

?>

