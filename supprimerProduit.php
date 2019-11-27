<?PHP
include "../../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["idProduit"])){
	$produitC->supprimerProduit($_POST["idProduit"]);
	header('Location: affichierp.php');
	
}

?>