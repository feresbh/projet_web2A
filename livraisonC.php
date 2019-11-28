<?php
include "/config.php";
class LivraisonC {
function afficherLivraison ($livraison){
		echo "Id Livraison: ".$livraison->getId()."<br>";
		echo "Nom: ".$livraison->getNom()."<br>";
		echo "Prenom: ".$livraison->getPrenom()."<br>";
		echo "Cin: ".$livraison->getCin()."<br>";
		echo "Numero de telephone: ".$livraison->getNumero()."<br>";
		echo "E-mail: ".$livraison->getMail()."<br>";
		echo "Adresse: ".$livraison->getAdresse()."<br>";
		echo "Livreur: ".$livraison->getLivreur()."<br>";
	}

	function ajouterLivraison($livraison){
		$sql="INSERT INTO livraison (id,nom,prenom,cin,numero,email,adresse,livreur) VALUES (:id,:nom,:prenom,:cin,:numero,:email,:adresse,:livreur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prÃ©pare la requete sql Ã  etre exÃ©cutÃ© par
		
        $id=$livraison->getId();
        $nom=$livraison->getNom();
        $prenom=$livraison->getPrenom();
        $cin=$livraison->getCin();
        $numero=$livraison->getNumero();
        $email=$livraison->getMail();
        $adresse=$livraison->getAdresse();
        $livreur=$livraison->getLivreur();
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);//bind value associe une valeur Ã  un parametre
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':livreur',$livreur);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function getChauffeur($livreur){
		$sql="SELECT * From livraison inner join chauffeur on chauffeur.numero=livraison.livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherLivraisons(){
		//$sql="SElECT * From chauffeur e inner join formationphp.chauffeur a on e.cin= a.cin";
		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($id){
		$sql="DELETE FROM livraison where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livraison,$id){
		$sql="UPDATE livraison SET id=:idn, nom=:nom,prenom=:prenom,cin=:cin, numero=:numero,email=:email,adresse=:adresse,livreur=:livreur WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idn=$livraison->getId();
        $nom=$livraison->getNom();
        $prenom=$livraison->getPrenom();
        $cin=$livraison->getCin();
        $numero=$livraison->getNumero();
        $email=$livraison->getMail();
        $adresse=$livraison->getAdresse();
        $livreur=$livraison->getLivreur();
		$datas = array( ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':idn'=>$idn, ':cin'=>$cin,':numero'=>$numero,':email'=>$email,':adresse'=>$adresse,':livreur'=>$livreur);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':livreur',$livreur);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($id){
		$sql="SELECT * from livraison WHERE id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	
	function rechercherListeLivraisons($idn){
		$sql="SELECT * from livraison where id=$idn";
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