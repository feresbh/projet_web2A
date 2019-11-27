<?php

class produit
{
	private $nom;
	private $idProduit;
	private $prix;
	private $quantite;
	private $couleur;
	private $urlImage;
	
	


public function __construct($nom,$idProduit,$prix,$quantite,$couleur,$urlImage)
{

$this->nom=$nom;
$this->idProduit=$idProduit;
$this->prix=$prix;
$this->quantite=$quantite;
$this->couleur=$couleur;
$this->urlImage=$urlImage;






}
public function getnom(){return $this->nom;}
public function getidProduit(){return $this->idProduit;}
public function getprix(){return $this->prix;}
public function getquantite(){return $this->quantite;}
public function getcouleur(){return $this->couleur;}
public function geturlImage(){return $this->urlImage;}


function setnom($nom){
		$this->nom=$nom;
	}
	function setidProduit($idProduit){
		$this->idProduit=$idProduit;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function setcouleur($couleur){
		$this->couleur=$couleur;
	}
	function seturlImage($urlImage){
		$this->urlImage=$urlImage;
	}
	

}


  ?>