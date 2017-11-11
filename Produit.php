<?php
	/* classe abstraite mère */
	abstract class Produit
	{
		private static $compteur = 0; /* compteur d'instances des classes filles */
		protected $nom;
		protected $prix;
		
		public function __construct($nom,$prix){
			$this->nom = $nom;
			$this->prix = $prix;
			self::$compteur++;  /* acces a une variable static */
		}
		public function calcul ($nbUnite) {
			print("Le prix de ".$nbUnite." ".$this->nom." est ".$this->prix * $nbUnite."€.<br>");
			return($this->prix * $nbUnite);
		}
		public function nbproduit() {
			print('Nombre produits créés = '.self::$compteur.'<br>');
			return (self::$compteur);
		}
	}
?>
