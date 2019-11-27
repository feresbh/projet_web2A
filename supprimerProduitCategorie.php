<?PHP

include "../../core/produitcategorieC.php";

$produitcategorieC=new ProduitcategorieC();
if (isset($_POST["idProduitsCategorie"])){
	$produitcategorieC->supprimerProduitCategorie($_POST["idProduitsCategorie"]);
	header('Location: general.php');
	
}

?>