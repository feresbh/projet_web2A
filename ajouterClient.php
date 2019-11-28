<?php 
include_once 'C:\wamp64\www\Mon module\entities\client.php';
include_once 'C:\wamp64\www\Mon module\core\clientf.php';

if( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['adresse']) and isset($_POST['codePostal']) and isset($_POST['sexe']) and isset($_POST['cin'])and isset($_POST['email'])and isset($_POST['login'])and isset($_POST['password']))
{

	$client1 = new client( $_POST['nom'] , $_POST['prenom'],$_POST['tel'],$_POST['adresse'],$_POST['codePostal'],$_POST['sexe'],$_POST['cin'],$_POST['email'],$_POST['login'],$_POST['password'],0,0);
        $client1C = new clientC();
        $client1C->ajouterclient($client1);
        header('location:..\views\front\eshopper\index.html') ;   
	
}		
else 
{
	echo "Champs Obligatoire";
}





 ?>