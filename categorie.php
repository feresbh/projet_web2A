<?php

class produitcategorie
{
	private $nom;
	private $idProduitsCategorie;
	
	
	


public function __construct($nom,$idProduitsCategorie)
{

$this->nom=$nom;
$this->idProduitsCategorie=$idProduitsCategorie;







}
public function getnom(){return $this->nom;}
public function getidProduitsCategorie(){return $this->idProduitsCategorie;}



}


  ?>