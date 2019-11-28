<?PHP
include "/entities/livraison.php";
include "/core/livraisonC.php";
include "/mailLivraison.php";
ob_start();

// Instantiation and passing `true` enables exceptions
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['numero']) and isset($_POST['email']) and isset($_POST['adresse']) ){
$livraison1=new livraison($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['numero'],$_POST['email'],$_POST['adresse'],$_POST['livreur']);

$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
sendConfirmationLivraison($_POST['email']);
header('Location: checkout.php');
ob_end_flush();
}else{
	echo "vérifier les champs";
}
//*/

?>