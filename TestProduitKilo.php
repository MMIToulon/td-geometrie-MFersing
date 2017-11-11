<?php
	require_once('ProduitKilo.php');
	
	$Tomate = new ProduitKilo("Tomate", 2);
	
	$Tomate->getprix();
	
	$prixtotal = 0;
	$prixtotal += $Tomate->calcul(3.5);
	$Tomate->nbproduit();
?>