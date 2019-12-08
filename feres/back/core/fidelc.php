<?php 
include '/../config.php';
/**
 * 
 */



class fidelc
{
	function modifierfidelisation($variable){
		$sql="UPDATE fidelisation SET val=:vall ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
		$vall=$variable->getx();
		$datas = array(':vall'=>$vall);
		$req->bindValue(':vall',$vall);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
		
	}
	function categorie($id)
    {
        $db = config::getConnexion();
        $sql = "SELECT categorie from produit where ref='$id'";

        try {
            $categorie = $db->query($sql);
            $categorie->execute();
            $categorie1 = $categorie->fetch();
            $ancien=$categorie1['categorie'];
            return $ancien ;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


	function afficher()
	{
		$sql1 = "SELECT val from fidelisation";
		
		$db = config::getConnexion();
		try {
			$valeur= $db->query($sql1);
			$valeur->execute();
			$valeur1 = $valeur->fetch();
			$v=$valeur1['val'];
			
		}
		catch (Exception $a){
            die('Erreur: '.$a->getMessage());
        }
		$sql="SElECT * From client where points>'$v'";
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