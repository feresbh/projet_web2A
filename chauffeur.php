<?php

class Chauffeur{
	

	private $nom;
	private $prenom;
	private $cin;
	private $numero;
	private $email;
	private $etat;
	private $recc;
	private $vehicule;


	function __construct($nom,$prenom,$cin,$numero,$email,$etat,$recc,$vehicule)
	{	

		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->numero=$numero;
		$this->email=$email;
		$this->etat=$etat;
		$this->recc=$recc;
		$this->vehicule=$vehicule;
	}


	function getNom(){
		return $this->nom;
	}

	function getPrenom(){
		return $this->prenom;
	}

	function getCin(){
		return $this->cin;
	}

	function getNumero(){
		return $this->numero;
	}

	function getMail(){
		return $this->email;
	}

	function getEtat(){
		return $this->etat;
	}

	function getRecc(){
		return $this->recc;
	}

	function getVehicule(){
		return $this->vehicule;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setPrenom($prenom){
		$this->prenom=$prenom;
	}

	function setCin($cin){
		$this->cin=$cin;
	}

	function setNumero($numero){
		$this->numero=$numero;
	}

	function setMail($email){
		$this->email=$email;
	}

	function setEtat($etat){
		$this->etat=$etat;
	}

	function setRecc($recc){
		$this->recc=$recc;
	}

	function setVehicule($vehicule){
		$this->vehicule=$vehicule;
	}

}

?>