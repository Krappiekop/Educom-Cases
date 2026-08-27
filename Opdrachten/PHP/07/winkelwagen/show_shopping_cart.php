<?php 
include("classes_shopping_cart.php");

$cart = new ShoppingCart();

$cart->addToCart("Appel");
$cart->addToCart("Peer");
$cart->addToCart("Peer");
$cart->addToCart("Citroen");
$cart->addToCart("Citroen");
$cart->addToCart("Banaan");

foreach ($cart->getCart() as $key => $value) {
	echo "Aantal ".$key.": ".$value;
	echo "<br>";
}


?> 

