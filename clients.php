<?php
class client
{
	private $nom;
	private $prenom;
	private $Sexe;
	private $Pseudo;
    private $mdp;
    private $Email;
	private $idC;

		public function __construct($nom,$prenom,$Sexe,$Pseudo,$Email,$idC,$mdp)
		{
			$this->idC=$idC;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->Sexe=$Sexe;
			$this->Pseudo=$Pseudo;
            $this->mdp=$mdp;
		}

		public function get_idC()
		{
			return $this->idC;
		}

		public function set_idC($idC)
		{
			$this->idC = $idC;
		}

		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($nom)
		{
			$this->nom = $nom;
		}

		public function get_prenom()
		{
			return $this->prenom;
		}

		public function set_prenom($prenom)
		{
			return $this->prenom=$prenom;
		}

		public function set_Sexe($Sexe)
		{
			$this->Sexe = $Sexe;
		}

		public function get_Sexe($Sexe)
		{
			return $this->Sexe;
		}

		public function get_Pseudo()
		{
			return $this->Pseudo;
		}

		public function set_Pseudo($Pseudo)
		{
			$this->Pseudo = $Pseudo;
		}

    public function get_mdp()
    {
        return $this->mdp;
    }

    public function set_mdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function get_email()
    {
        return $this->Email;
    }

    public function set_email($Email)
    {
        $this->Email = $Email;
    }
}	
?>