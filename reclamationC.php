<?PHP
include_once"../entities/reclamation.php";
include "/config.php";

class reclamationC {
/*function afficherCommentaire ($commentaire){
		echo "id_commentaire: ".$commentaire->getid_commentaire()."<br>";
		echo "commentaire_com: ".$commentaire->getcommentaire_com()."<br>";
		echo "note: ".$commentaire->getnote()."<br>";
		echo "id_client: ".$commentaire->getid_client()."<br>";
		echo "id_produit: ".$commentaire->getid_produit()."<br>";
		echo "date_com: ".$commentaire->getdate_com()."<br>";
	}*/
	
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (phone,email,message,repondre,date_reclamation,user) values ( :phone,:email,:message,:repondre,:date_reclamation,:user)";
		
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $phone=$reclamation->getphone();
        $date_reclamation=$reclamation->getdate_reclamation();
        $email=$reclamation->getemail();
        $message=$reclamation->getmessage();
        $repondre=$reclamation->getrepondre();
        $user=$reclamation->getuser();
      

		
		$req->bindValue(':phone',$phone);
		$req->bindValue(':date_reclamation',$date_reclamation);
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		$req->bindValue(':repondre',$repondre);
		$req->bindValue(':user',$user);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamation($user){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From reclamation where user='$user'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        	}
	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_reclamation',$id_reclamation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$id){
		$sql="UPDATE reclamation SET  phone=:phone,email=:email,message=:message WHERE id_reclamation=:id_reclamation";
		
		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$reclamation->getid();
        $phone=$reclamation->getphone();
        
        $email=$reclamation->getemail();
        $message=$reclamation->getmessage();
        
		$datas = array(':id'=>$id, ':phone'=>$phone, ':email'=>$email,':message'=>$message);
		$req->bindValue(':id',$id);
		$req->bindValue(':phone',$phone);
		
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		
		
		
            $s=$req->execute();
			
          // header('Location: ind.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($id){
		$sql="SELECT * from reclamation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherid_client($id_client){
		$sql="SELECT * from reclamation where id_client=$id_client";
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