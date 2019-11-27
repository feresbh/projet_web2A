function test(){


	if((document.monform.nom.value=='')||(document.monform.nom.value.charAt(0)<'A' || document.monform.nom.value.charAt(0) >'Z'))
	{
		document.monform.nom.style.border='2px solid RED';
	alert("Le nom du produit est obligatoire et le nom doit commencer avec une lettre majuscule ! ");
	return false;
	}
	else if((document.monform.idProduitCategorie.value=='')||(document.monform.idProduitCategorie.value.length!=8))
	{
		document.monform.idProduitCategorie.style.border='2px solid RED';
		alert("Il faut remplir le champ Id Produit Categorie avec 8 chiffres");
		return false;
	}
	

}