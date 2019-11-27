function test(){



 if ((document.monform.nom.value=='')||(document.monform.nom.value.charAt(0) <'A' || document.monform.nom.value.charAt(0) >'Z'))
 {
 	document.monform.nom.style.border='2px solid RED';
 	alert("Le nom du produit est obligatoire et le nom doit commencer avec une lettre majuscule ! ");
 	
 	return false;
 }
 
else if((document.monform.idProduit.value=='') || (document.monform.idProduit.value.length !=8)){
	document.monform.idProduit.style.border='2px solid RED';
	alert("Il faut remplir le champ Id Produit avec 8 chiffres");
	return false;

}

 if(document.monform.prix.value=='')
{
	document.monform.prix.style.border='2px solid RED';
	alert("Il faut remplir le champ Prix");
	return false;

}
 else if(document.monform.quantite.value=='') 
{
	document.monform.quantite.style.border='2px solid RED';
	alert("Il faut remplir le champ Quantite");
	return false;

}
 if(document.monform.couleur.value=='')
{
	document.monform.couleur.style.border='2px solid RED';
	alert("Il faut remplir le champ Couleur");
	return false;

}
 else if(document.monform.urlImage.value=='')
{
	document.monform.urlImage.style.border='2px solid RED';
	alert("Il faut remplir le champ Url Image");
	return false;

}

}
 