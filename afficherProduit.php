<?PHP
include "../../core/produitC.php";
$produit1C=new produitC();
$listeproduits=$produit1C->afficherProduits();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>nom</td>
<td>idProduit</td>
<td>prix</td>
<td>quantite</td>
<td>couleur</td>
<td>urlImage</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['idProduit']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['couleur']; ?></td>
	<td><?PHP echo $row['urlImage']; ?></td>
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


