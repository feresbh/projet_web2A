<?PHP
include "../../core/produitcategorieC.php";
$produitcategorie1C=new produitcategorieC();
$listeproduitscategorie=$produitcategorie1C->afficherproduitscategorie();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>nom</td>
<td>idProduitsCategorie</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeproduitscategorie as $row){
	?>
	<tr>

	<td><?PHP echo $row['idProduitscategorie']; ?></td>
		<td><?PHP echo $row['nom']; ?></td>
	
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idProduit']; ?>" name="idProduit">
	</form>
	</td>
	<td><a href="modifierproduit.php?idProduit=<?PHP echo $row['idProduit']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
