<?PHP
class reclamation{
	
	private $nom;
	private $idr;
	private $prenom;
	private $tel;
	private $adresse;
	private $mail;
	private $description;
	function __construct($nom,$prenom,$tel,$adresse,$mail,$description){
	
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->adresse=$adresse;
		$this->mail=$mail;
		$this->description=$description;

	}
	
function getidr(){return $this->idr;}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getTel(){
		return $this->tel;
	}
	function getAdresse(){
		return $this->adresse;
	}
	
	function getMail(){
		return $this->mail;
	}
	
	function getDescription(){
		return $this->description;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	
	function setMail($mail){
		$this->mail=$mail;
	}
	
	function setDescription($description){
		$this->description=$description;
	}
	
}

?>