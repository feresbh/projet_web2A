<?php
include "fct.php";

$produit=new stockc();
if (isset($_POST['ref'])) {
	$produit->supprimer($_POST['ref']);
}

?>