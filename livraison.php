<?php

class Livraison{
	
	private $id;
	private $nom;
	private $prenom;
	private $cin;
	private $numero;
	private $email;
	private $adresse;
	private $livreur;


	function __construct($id,$nom,$prenom,$cin,$numero,$email,$adresse,$livreur)
	{	
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->numero=$numero;
		$this->email=$email;
		$this->adresse=$adresse;
		$this->livreur=$livreur;
	}

	function getId(){
		return $this->id;
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

	function getAdresse(){
		return $this->adresse;
	}

	function getLivreur(){
		return $this->livreur;
	}

	function setId($id){
		$this->id=$id;
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

	function setAdresse($adresse){
		$this->adresse=$adresse;
	}

	function setLivreur($livreur){
		$this->livreur=$livreur;
	}

}

?>