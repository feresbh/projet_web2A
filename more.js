function test() {
	
	var ref=f.ref.value;
	var pr=f.pourcentage.value;
	var dtd=f.datedebut.value
	var dtf=f.datefin.value
	var x=true;
	if (ref.length==0)
	{
		alert("la referance du produit est obligatoire");
		var tr=document.getElementById('champ1');
		tr.style.border = ' 2px solid RED';
		x=false;
		
	}
	if (pr.length==0)
	{
		alert("la pourcentage du promo est obligatoire");
		var tr=document.getElementById('champ2');
		tr.style.border = ' 2px solid RED';
		x=false;
	}
	if (dtd.length==0)
	{
		alert("la date debut du promo est obligatoire");
		var tr=document.getElementById('champ3');
		tr.style.border = ' 2px solid RED';
		x=false;
	}
	if (dtf.length==0)
	{
		alert("la date debut du promo est obligatoire");
		var tr=document.getElementById('champ4');
		tr.style.border = ' 2px solid RED';
		x=false;
	}
	else if(dtf>dtd){
		alert("la date debut doit etre inferieur a la dite fin");
		var tr=document.getElementById('champ4 champ3');
		tr.style.border = ' 2px solid RED';
		x=false;

	}
	return x;
}

function control() {
	var x=true;
	var t=f.ref.value;
	if (t.length==0)
	{
		alert("pour supprimer vous devez enter une reference");
		var tr=document.getElementById('champ');
		tr.style.border = ' 2px solid RED';
		x=false;
	}
	return x;

}