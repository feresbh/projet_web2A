<?php
include_once "/config.php";


class clientC

{	function recupererclient($id)
	{
   		$sql="SELECT * from clients where idC=$id";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

    function ajouterclient($client){
        $sql="insert into clients (nom,prenom,Sexe,Pseudo,Email,mdp) values (:nom, :prenom, :Sexe, :Pseudo, :Email, :mdp)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $nom=$client->get_nom();
            $prenom=$client->get_prenom();
            $Sexe=$client->get_Sexe();
            $Pseudo=$client->get_Pseudo();
            $Email=$client->get_email();
            $mdp=$client->get_mdp();

            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':Sexe',$Sexe);
            $req->bindValue(':Pseudo',$Pseudo);
            $req->bindValue(':Email',$Email);
            $req->bindValue(':mdp',$mdp);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }



	function mailcommande($mail,$somme,$date)
	{
		$msg="Vous venez de passer une commande chez Banette le ".$date."\nSomme de la commande : ".$somme." DT\nmerci d'avoir choisi nos services.";
		$msg=wordwrap($msg,70);
		mail($mail, $msg, $msg);
	}
}