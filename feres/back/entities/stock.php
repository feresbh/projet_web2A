<?php 
/**
 * 
 */
class produit
{

	private $nom;
	private $prix;
	private $quantite;
	private $ref;
	private $couleur;
	private $categorie;
	
	function __construct($nom,$prix,$quantite,$ref,$couleur,$categorie)
	{
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->ref=$ref;
		$this->couleur=$couleur;
		$this->categorie=$categorie;
	}
	function getnom(){return $this->nom;}
	function getprix(){return $this->prix;}
	function getquantite(){return $this->quantite;}
	function getref(){return $this->ref;}
	function getcouleur(){return $this->couleur;}
	function getcategorie(){return $this->categorie;}
}
 ?>