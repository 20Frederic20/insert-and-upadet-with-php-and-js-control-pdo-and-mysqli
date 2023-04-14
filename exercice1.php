<?php 

class Dalton {
	private $nom, $coefficient;
    public $liste;
	
	public function __construct($code, $libelle) {
		$this->nom = $code;
		$this->coefficient = $libelle;
        $this->liste = array();
	}

	public function CrerDalton(){
		array_push($this->liste, $this->codeMateriel,  $this->libelleMateriel);
	}

	public function AfficherDalton(){
		echo "Un Dalton vient de voir le jour. Il s'appelle " . $this->nom . " et son coefficient intellectuel est  " . $this->coefficent . " <br>";
	}
}