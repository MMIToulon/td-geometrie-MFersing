<?php
	// require_once('Produit.php');
	abstract class Produit
	{
		public $nom;
		public static $compteur;
		public $prixunite;
		
		public function __construct($nom,$prixunite){
			$this->nom = $nom;
			$this->prixunite = $prixunite;
		}
		public function calcul ($nbUnite) {
			return($this->prixunite * $nbUnite);
		}
		public function getNom() {
			return $this->nom;
		}
		public function getprix() {
			return $this->prixunite;
		}
		public function setprix($prix) {
			$this->prixunite=$prix;
		}
	}
	class ProduitUnite extends Produit
	{	
		public static $compteur = 0;
		public function __construct($nomproduitunite,$prixunite){
			parent::__construct($nomproduitunite,$prixunite);
			self::$compteur = self::$compteur+1;
		}
    public function nbproduit()
    {
        echo self::$compteur;
    }
	}
	class ProduitKilo extends Produit
	{		
		public function __construct($nomproduitkilo,$prixkilo){
			parent::__construct($nomproduitkilo,$prixkilo);
		}
    public function nbproduit()
    {
        echo self::$compteur;
    }
	}
	$Tomate = new ProduitKilo("Tomate",2);
	$nbUnite = 3;
	echo $Tomate->calcul($nbUnite).'<br/>';
	echo $Tomate->prixunite;
	$Tomate->nbproduit();
?>