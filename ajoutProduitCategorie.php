<?PHP
include "../../entities/categorie.php";
include "../../core/produitcategorieC.php";

if (isset($_POST['nom']) and isset($_POST['idProduitCategorie']))
{

	
$produitcategorie1=new produitcategorie($_POST['nom'],$_POST['idProduitCategorie']);

$produitcategorie1C=new produitcategorieC();
$produitcategorie1C->ajouterproduitcategorie($produitcategorie1);
//header('Location: afficherproduitcategorie.php');-->
header('Location: general.php');
}else{
	echo "vérifier les champs";
}

?>