<?php 
include "config.php";

/**
 * 
 */
class stockc
{
	
	function ajouterproduit($produit)
	{
		
		
			
			$nom=$produit->getnom();
			$prix=$produit->getprix();
			$quantite=$produit->getquantite();
			$ref=$produit->getref();
			$couleur=$produit->getcouleur();
			$categorie=$produit->getcategorie();
			$sql="insert into produit (nom,prix,quantite,ref,couleur,categorie) values ('$nom','$prix','$quantite','$ref','$couleur','$categorie')";
		$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
		 $req->execute();
		}
		catch(Expection $e){	
			echo "Erreur".$e->getMessage();
		}
	}

	function affichier()
	{
		$sql="select * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimer($ref)
	{
		$sql="DELETE FROM produit where ref= :ref";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('ERREUR:' .$e->getMessage());
		}
	}

	function ajoutpromo($produit,$ref,$pourcentage)
	{
		$sql="UPDATE produit set prix=:prixnouv WHERE ref=:ref";
		$db=config::getConnexion();
		$prixnouv=($prix*$pourcentage)/100;
		try
		{
			$req=$db->prepare($sql);
			$prixnouv=$produit->getprix();

			$req->bindValue(':prixnouv',$prixnouv);
			$req->execute();
		}
		catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function recupererproduit($cin){
		$sql="SELECT * from produit where ref=$ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

 ?>