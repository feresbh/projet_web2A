<?php 
include '/../config.php';
/**
 * 
 */
class promoc
{
    function modifier($variable){
        $sql="UPDATE affichier SET val=:vall ";
        
        $db = config::getConnexion();
        try{        
        $req=$db->prepare($sql);
        $vall=$variable->get();
        $datas = array(':vall'=>$vall);
        $req->bindValue(':vall',$vall);
        $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
        
    }
    function afficherd($ref){
        $sql = "SELECT * from promo where ref='$ref'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherprod($ref){
        $sql = "SELECT * from produit where ref='$ref'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

	function afficher(){

		$sql="SElECT * From promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function afficher_asc(){
        $sql="SElECT * From promo order by prix asc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficher_dsc(){
        $sql="SElECT * From promo order by prix desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function afficher_time(){
        $sql="SElECT * From promo order by datedebut asc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimer($ref){
        $sql="DELETE FROM promo where ref= :ref";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ref',$ref);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


	function prixancien($id)
    {
        $db = config::getConnexion();
        $sql = "SELECT prix from produit where ref='$id'";

        try {
            $ancienprix = $db->query($sql);
            $ancienprix->execute();
            $ancienprix1 = $ancienprix->fetch();
            $ancien=intval($ancienprix1['prix']);
            echo "le prix ancien est: ".$ancien."</br>";
            return $ancien ;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function quantite($id)
    {
        $db = config::getConnexion();
        $sql = "SELECT quantite from produit where ref='$id'";

        try {
            $quantite = $db->query($sql);
            $quantite->execute();
            $quantite1 = $quantite->fetch();
            $ancien=intval($quantite1['quantite']);
            return $ancien ;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function couleur($id)
    {
        $db = config::getConnexion();
        $sql = "SELECT couleur from produit where ref='$id'";

        try {
            $couleur = $db->query($sql);
            $couleur->execute();
            $couleur1 = $couleur->fetch();
            $ancien=$couleur1['couleur'];
            return $ancien ;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function nom($id)
    {
        $db = config::getConnexion();
        $sql = "SELECT nom from produit where ref='$id'";

        try {
            $nom = $db->query($sql);
            $nom->execute();
            $nom1 = $nom->fetch();
            $ancien=$nom1['nom'];
            return $ancien ;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
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

    function ajouterpromo($promotion)
    {
    	$ref=$promotion->getref();
    	$refproduit=$promotion->getrefproduit();
    	$nom=$promotion->getnom();
    	$prix=$promotion->getprix();
    	$quantite=$promotion->getquantite();
    	$couleur=$promotion->getcouleur();
    	$categorie=$promotion->getcategorie();
    	$datedebut=$promotion->getdatedebut();
    	$datefin=$promotion->getdatefin();
    	$sql="insert into promo (ref,refproduit,nom,prix,quantite,couleur,categorie,datedebut,datefin) values ('$ref','$refproduit','$nom','$prix','$quantite','$couleur','$categorie','$datedebut','$datefin')";
    	$db= config::getConnexion();
    	try
    	{
    		$req=$db->prepare($sql);
    		$req->execute();
    	}
    	catch(Expection $e){	
			echo "Erreur".$e->getMessage();
		}
    }


    
	function affichierpromo()
	{
		$time=time();
		$sql= "select * from promo where datefin>'$time' ";
		$db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
	}
}

 ?>