<?php 

/**
 * 
 */
/**
 * 
 */
class variable
{
	private $x;
	function __construct($x)
	{
		$this->x=$x;
	}
	function getx(){return $this->x;}
}
class promotion
{
	private $ref;
	private $refproduit;
	private $nom;
	private $prix;
	private $quantite;
	private $couleur;
	private $categorie;
	private $datedebut;
	private $datefin;

	function __construct($ref,$refproduit,$nom,$prix,$quantite,$couleur,$categorie,$datedebut,$datefin)
	{
		$this->ref=$ref;
		$this->refproduit=$refproduit;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->couleur=$couleur;
		$this->categorie=$categorie;
		$this->datedebut=$datedebut;
		$this->datefin=$datefin;
	}
	function getref(){return $this->ref;}
	function getrefproduit(){return $this->refproduit;}
	function getnom(){return $this->nom;}
	function getprix(){return $this->prix;}
	function getquantite(){return $this->quantite;}
	function getcouleur(){return $this->couleur;}
	function getcategorie(){return $this->categorie;}
	function getdatedebut(){return $this->datedebut;}
	function getdatefin(){return $this->datefin;}
}

 ?>