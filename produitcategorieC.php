<?PHP
include "../../config.php";
class produitcategorieC {
	function ajouterproduitcategorie($produitcategorie){
		
		$nom=$produitcategorie->getnom();
        $idProduitsCategorie=$produitcategorie->getidProduitsCategorie();
        
       /* $urlImage=$produit->getprix();
		/*$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':prixH',$prix);
		$req->bindValue(':urlImage',$urlImage);*/
		$sql="INSERT INTO produitcategorie (nom,idProduitsCategorie) values ('$nom','$idProduitsCategorie')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherproduitscategorie(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
		$sql="SElECT * From produitcategorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function afficherproduitcategorie ($produitcategorie){
	    
	        echo "nom: ".$produitcategorie->getnom()."<br>";
	    echo "idProduitsCategorie: ".$produitcategorie->getidProduitsCategorie()."<br>";
	
		
		
	}

	/*function calculerSalaire($produit){
		echo $produit->geturlImage() * $produit->getprix();
	}
	*/
	
	
	function supprimerProduitCategorie($idProduitsCategorie){
		$sql="DELETE FROM produitcategorie where idProduitsCategorie= :idProduitsCategorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idProduitsCategorie',$idProduitsCategorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduitcategorie($produitcategorie,$idProduitsCategorie){
		$sql="UPDATE produitcategorie SET  nom=:nom,idProduitsCategorie=:iddProduitsCategorie WHERE idProduitsCategorie=:idProduitsCategorie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        $nom=$produitcategorie->getnom();
        $iddProduitsCategorie=$produitcategorie->getidProduitsCategorie();
       
		$datas = array(':nom'=>$nom, ':iddProduitsCategorie'=>$iddProduitsCategorie);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':iddProduitsCategorie',$iddProduitsCategorie);
		$req->bindValue(':idProduitsCategorie',$idProduitsCategorie);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduitcategorie($idProduitsCategorie){
		$sql="SELECT * from produitcategorie where idProduitsCategorie=$idProduitsCategorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeproduits($urlImage){
		$sql="SELECT * from produit where prix=$urlImage";
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