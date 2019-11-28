<?PHP
include "../entities/statistique.php";
include "../core/statistiqueC.php";
include "../entities/historique.php";
include "../core/historiqueC2.php";

if (isset($_POST['Libelle']) and isset($_POST['Description']) and isset($_POST['select']) ){
$Statistique1=new Statistique($_POST['Libelle'],$_POST['Description'],$_POST['select']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$Statistique1c=new StatistiqueC();
$Statistique1c->ajouterstatistique($Statistique1);
$his = new historique("ajout d un statistique don't le nom ".$_POST['Libelle']." est avec succsess" );
$historiqueeC1=new historiqueeC();
$historiqueeC1->ajouterhistoriquee($his);
header('Location: ajouter_stat.html');

echo "c bon";
}else{
	echo "vérifier les champs";
}
//*/

?>