<?php
namespace Model;
//creation d'une classre Membre 
Class Membre {
	private $_nom;
	private $_prenom;
	private $_pseudo;
	private $_mail;
	private $_nationalite;
	private $_date_naissance;
	private $_genre;
	private $_photo;
	private $_autre;
	private $_age_public;

	public function __construct($nom,$prenom,$pseudo,$mail,$nationalite,$date_naissance,$genre,$photo,$autre,$age_public) {
	
		//J'utilise le mot clé $this car il fait référence à mon objet courant.

		//La propriété nom de ma Classe membre, va prendre pour valeur, la valeur transmise au constructeur au moment de l'instanciation.
		$this->_nom 			= $nom;
		$this->_prenom 			= $prenom;
		$this->_pseudo 			= $pseudo;
		$this->_mail 			= $mail;
		$this->_nationalite 	= $nationalite;		
		$this->_date_naissance  = $date_naissance;
		$this->_genre       	= $genre;
		$this->_photo       	= $photo;
		$this->_autre       	= $autre;
		$this->_age_public      = $age_public;

	}

	//Getters : Ce sont des fonctions me permettant de retourner la propriété de ma classe. Il y aura donc un getter par propriété.
	public function getNom() {
		//Ici, le Getter va me renvoyer via "return" la valeur de la propriété nomEcole. On procède à l'identique pour chaque propriété.
		return $this->_nom;
	}

	public function getPrenom() {
		return $this->_prenom;
	}

	public function getPseudo() {
		return $this->_pseudo;
	}

	public function getMail() {
		return $this->_mail;
	}

	public function getNationalite() {
		return $this->_nationalite;
	}

	public function getDateNaissance() {
		return $this->_date_naissance;
	}

	public function getGenre() {
		return $this->_genre;
	}

	public function getPhoto() {
		return $this->_photo;
	}

	public function getAutre() {
		return $this->_autre;
	}

	public function getAgePublic() {
		return $this->_age_public;
	}


}