<?PHP
include "../../entities/statistique.php";
include "../../core/statistiqueC.php";
include "../../entities/historique.php";
include "../../core/historiqueC2.php";

if (isset($_POST['Libelle']) and isset($_POST['Description']) and isset($_POST['select']) ){
$Statistique1=new Statistique($_POST['Libelle'],$_POST['Description'],$_POST['select']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$Statistique1c=new StatistiqueC();
$verif=$Statistique1c->ajouterstatistique($Statistique1);
if  ($verif == 1)
{
$his = new historique("Statistique (".$_POST['select'].") été ajouté avec succsess" );
$historiqueeC1=new historiqueeC();
$historiqueeC1->ajouterhistoriquee($his);	
}

header('Location: ajouter_stat.php');

}

else{
	echo "vérifier les champs";
}
//*/

?>