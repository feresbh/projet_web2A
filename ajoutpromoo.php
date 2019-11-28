<?php

include "/../../entities/promo.php" ;
include "/../../core/promoc.php";

if (isset($_POST['ref']) and isset($_POST['pourcentage']) and isset($_POST['datedebut']) and isset($_POST['datefin']) ) {
    # code...
    $promotion1c=new promoc();
    $pourcent=$_POST['pourcentage'];
    echo "le pourcentage est ".$pourcent."</br>";
    $ancien=$promotion1c->prixancien($_POST['ref']);
    $prix=($ancien*$pourcent)/100;
    echo($prix);
    $promo=new promotion($_POST['ref']."pr",$_POST['ref'],$promotion1c->nom($_POST['ref']),$prix,$promotion1c->quantite($_POST['ref']),$promotion1c->couleur($_POST['ref']),$promotion1c->categorie($_POST['ref']),$_POST['datedebut'],$_POST['datefin']);
    
    $promotion1c->ajouterpromo($promo);
    header('location: ajoutpromo.php');
    
    

}
else{
    echo "verifier les champs";
}
 ?>