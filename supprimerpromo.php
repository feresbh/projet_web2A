<?PHP
include "/../../core/promoc.php";
$promoc=new promoc();
if (isset($_POST["ref"])){
	echo $_POST["ref"];
	$promoc->supprimer($_POST["ref"]);
	header('Location: carousel.php');

}
else{
    echo "verifier les champs";
}

?>