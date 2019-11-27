<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";

if (isset($_POST['nom']) and isset($_POST['idProduit']) and isset($_POST['prix']) and isset($_POST['quantite']) and isset($_POST['couleur'])and isset($_POST['urlImage']))
{
$produit1=new produit($_POST['nom'],$_POST['idProduit'],$_POST['prix'],$_POST['quantite'] ,$_POST['couleur']  ,$_POST['urlImage']);
//Partie2
/*
var_dump($produit1);
}
*/
//Partie3
$produit1C=new produitC();
$produit1C->ajouterproduit($produit1);

header('Location: affichierp.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>