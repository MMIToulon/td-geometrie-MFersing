<?php
	require_once ("Produit.php");
	/* classe fille produit à l'unité */
	class ProduitUnite extends Produit
	{	
		public function __construct($nomproduitunite,$prixunite){
			parent::__construct($nomproduitunite,$prixunite);
		}
		public function getprix() {
			print("Le prix unitaire de ".$this->nom." est ".$this->prix."€.<br>");
			return $this->prix;
		}
	}
?>