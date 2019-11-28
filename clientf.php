<?php 
include 'C:\wamp64\www\Mon module\config.php';

class clientC
{
	public function ajouterclient($c)
	{
		$nom=$c->getnom();
		$prenom=$c->getprenom();
		$tel=$c->gettel();
		$adresse=$c->getadresse();
		$codePostal=$c->getcodePostal();
		$sexe=$c->getsexe();
		$cin=$c->getcin();
		$email=$c->getemail();
		$login=$c->getlogin();
		$password=$c->getpassword();
		$etat=$c->getetat();
        $role=$c->getrole();
		$sql = "INSERT INTO utilisateur (nom,prenom,tel,adresse,codePostal,sexe,cin,email,login,password,etat,role,nbrPointsFid) VALUES ('$nom','$prenom','$tel','$adresse','$codePostal','$sexe','$cin','$email','$login','$password','sfgs','sfbvds','20')";
		$db = config::getConnexion();

		try {
			$req = $db->prepare($sql);
			$req->execute() ;
		} catch (Exception $e) {
			echo 'erreur ; '.$e->getMessage();
		}

		
		

		//hethi mrigela
	}



}




 ?>