<?php 

include "stock.php";
include "fct.php";


if(isset($_POST['nom'])	 and isset($_POST['prix']) and isset($_POST['quantite']) and isset($_POST['ref']) and isset($_POST['couleur']) and isset($_POST['categorie']))
{
	$produit1=new produit($_POST['nom'],$_POST['prix'],$_POST['quantite'],$_POST['ref'],$_POST['couleur'],$_POST['categorie']);
	$produit1c=new stockc();
	$produit1c->ajouterproduit($produit1);
}
else{
	echo "verifier les champs";
}

 ?>