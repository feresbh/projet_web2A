<?PHP
include "../../core/StatistiqueC.php";
include ".../../entities/historique.php";
include "../../core/historiqueC2.php";
echo $_POST["cin"];
$StatistiqueC1=new StatistiqueC();

if (isset($_POST["cin"])){
	$StatistiqueC1->supprimerstatistique($_POST["cin"]);
$historiqueeC1=new historiqueeC();
$historiqueeC1->supprimerhistorique($_POST["cin"]);
header('Location: affichage_Tableau_statistique.php');
}

?>