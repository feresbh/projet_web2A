<?php 
require_once 'C:\wamp64\www\Mon module\config.php';

class clientC
{
		public function afficherClient()
	{
		$sql = 'SELECT * FROM utilisateur';
		$db = config::getConnexion();
		try {
			$liste=$db->query($sql) ;
			return $liste ;
		} catch (Exception $e) {
			die('Erreur '.$e->getMessage());
		}
		
	}

	public function deleteClient($id)
	{
		$sql ="DELETE FROM utilisateur where idUtilisateur= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':idUtilisateur',$id);
		try {
			$req->execute() ;
		} catch (Exception $e) {
			die('Erreur :'.$e->getMessage());
		}
	}

	public function afficherClientID($id)
	{
		$db = config::getConnexion();
		$sql = 'SELECT * FROM utilisateur WHERE idUtilisateur= "'.$id.'"';
		$result = $db->query($sql);
		return $result->fetchAll();
		//Return array of array
		//Index Nom du colonne de table de base de données
	}
	public function afficherClientEmail($id)
	{
		$db = config::getConnexion();
		$sql = 'SELECT email FROM utilisateur WHERE idUtilisateur= "'.$id.'"';
		$result = $db->query($sql);
		return $result->fetch();
		//Return array of array
		//Index Nom du colonne de table de base de données
	}
	public function updateClientID($id,$c)
	{
		$db = config::getConnexion();
	$sql = 'UPDATE utilisateur SET nom = :nom,prenom = :prenom,tel = :tel,adresse = :adresse,codePostal = :codePostal,sexe = :sexe,cin = :cin,email = :email,login = :login,password = :password,role = :role WHERE idUtilisateur = :idUtilisateur';
		$req = $db->prepare($sql);
		
	$req->bindValue(':nom',$c->getnom());
		$req->bindValue(':prenom',$c->getprenom());
		$req->bindValue(':tel',$c->gettel());
		$req->bindValue(':adresse',$c->getadresse());
		$req->bindValue(':codePostal',$c->getcodePostal());
		$req->bindValue(':sexe',$c->getsexe());
		$req->bindValue(':cin',$c->getcin());
		$req->bindValue(':email',$c->getemail());
		$req->bindValue(':login',$c->getlogin());
		$req->bindValue(':password',$c->getpassword());
		
	    $req->bindValue(':role',$c->getrole());
		$req->bindValue(':idUtilisateur',$id);
		$req->execute();
	}

	public function CountClientFemme()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM utilisateur Where sexe='Femme'");
        return $req1->rowCount();
    }

    public function CountClientHomme()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM utilisateur Where sexe='Homme'");
        return $req1->rowCount();
    }

}




 ?>