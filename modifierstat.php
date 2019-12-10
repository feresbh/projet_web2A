<?PHP
include "../../entities/statistique.php";
include "../../core/statistiqueC.php";


if (isset($_POST['modifier'])){
		$Statistique1c=new StatistiqueC();
	echo $_POST['id'];
	$Statistique1=new Statistique($_POST['Libelle'],$_POST['Description'],$_POST['select']);


    $Statistique1c->modifierstatistique($Statistique1,$_POST['id']);
    header('Location: affichage_Tableau_statistique.php');


}
?>