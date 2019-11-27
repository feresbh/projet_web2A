<?PHP
include "../../config.php";
class produitC {
	function ajouterproduit($produit){
		
		$nom=$produit->getnom();
        $idProduit=$produit->getidProduit();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $couleur=$produit->getcouleur();
         $urlImage=$produit->geturlImage();
       /* $urlImage=$produit->getprix();
		/*$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':prixH',$prix);
		$req->bindValue(':urlImage',$urlImage);*/
		$sql="insert into produit (nom,idProduit,prix,quantite,couleur,urlImage) values ('$nom','$idProduit','$prix','$quantite','$couleur','$urlImage')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherproduits(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function afficherproduit ($produit){
	echo "nom: ".$produit->getnom()."<br>";
		echo "idProduit: ".$produit->getidProduit()."<br>";
		echo "prix: ".$produit->getprix()."<br>";
		echo "quantite: ".$produit->getquantite()."<br>";
		echo "couleur: ".$produit->getcouleur()."<br>";
		echo "urlImage: ".$produit->geturlImage()."<br>";
	}
	function calculerSalaire($produit){
		echo $produit->geturlImage() * $produit->getprix();
	}
	
	
	
	function supprimerProduit($idProduit){
		$sql="DELETE FROM produit where idProduit= :idProduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idProduit',$idProduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$idProduit){
		$sql="UPDATE produit SET nom=:nom,idProduit=:iddProduit,prix=:prix,quantite=:quantite,couleur=:couleur,urlImage=:urlImage WHERE idProduit=:idProduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$produit->getnom();
		$iddProduit=$produit->getidProduit();
        $prix=$produit->getprix();
        $quantite=$produit->getquantite();
        $couleur=$produit->getcouleur();
        $urlImage=$produit->geturlImage();
		$datas = array(':nom'=>$nom,':iddProduit'=>$iddProduit,':prix'=>$prix,':quantite'=>$quantite,':couleur'=>$couleur,':urlImage'=>$urlImage);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':iddProduit',$iddProduit);
		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':urlImage',$urlImage);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($idProduit){
		$sql="SELECT * from produit where idProduit=$idProduit";
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