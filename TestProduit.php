<?php
	require_once('ProduitKilo.php');
	require_once('ProduitUnite.php');

	$Salade = new ProduitUnite("Salade", 1);
	$Tomate = new ProduitKilo("Tomate", 2);

	$Salade->getprix();
	$Tomate->getprix();

	$prixtotal = 0;
	$prixtotal += $Salade->calcul(2);
	$prixtotal += $Tomate->calcul(3.5);
	$Tomate->nbproduit();
	print("Prix total = ".$prixtotal."€<br>");
?>