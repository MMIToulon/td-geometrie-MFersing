<?php
	require_once('ProduitUnite.php');

	$Salade = new ProduitUnite("Salade", 1);
	
	$Salade->getprix();

	$prixtotal = 0;
	$prixtotal += $Salade->calcul(2);
	$Salade->nbproduit();
?>