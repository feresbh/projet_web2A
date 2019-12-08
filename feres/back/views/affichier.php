<?php 
include "fct.php";
$produit=new stockc();
$listproduit=$produit->affichier();
 ?>

 <table border="1" width="75%" align="center">
 	<caption> liste des produits dans le stock</caption>
 	<tr>
 		<td>nom</td>
 		<td>prix</td>
 		<td>quantite</td>
 		<td>ref</td>
 		<td>couleur</td>
 		<td>categorie</td>
 	</tr>
 	<?php
 	foreach ($listproduit as $row) {
 		?>
 		<tr>
 			<td><?php echo $row['nom'];  ?></td>
 			<td><?php echo $row['prix'];  ?></td>
 			<td><?php echo $row['quantite'];  ?></td>
 			<td><?php echo $row['ref'];  ?></td>
 			<td><?php echo $row['couleur'];  ?></td>
 			<td><?php echo $row['categorie'];  ?></td>
 		</tr>
 		<?php
 	}
?>
 </table>