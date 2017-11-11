<?php
	require_once ("Produit.php");
	/* classe fille produit au kilo */
	class ProduitKilo extends Produit
	{		
		public function __construct($nomproduitkilo,$prixkilo){
			parent::__construct($nomproduitkilo,$prixkilo);
		}
		public function getprix() {
			print("Le prix au kilo de ".$this->nom." est ".$this->prix."€.<br>");
			return $this->prix;
		}
	}
?>