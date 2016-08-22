<?php
namespace Model;
//creation d'une classre Membre 
Class Membre {
	private $_nom;
	private $_prenom;
	private $_pseudo;
	private $_mail;
	private $_nationalite;
	private $_age;
	private $_genre;
	private $_photo;

		public function __construct($nom,$prenom,$pseudo,$mail,$nationalite,$age,$genre,$photo) {
		
		//J'utilise le mot clé $this car il fait référence à mon objet courant.

		//La propriété nom de ma Classe membre, va prendre pour valeur, la valeur transmise au constructeur au moment de l'instanciation.
		$this->_nom 		= $nom;

		//On va procéder de la meme façon pour les autres propriétés.
		$this->_prenom 		= $prenom;
		$this->_pseudo 		= $pseudo;
		$this->_mail 		= $mail;
		$this->_nationalite = $nationalite;		
		$this->_age         = $age;
		$this->_genre       = $genre;
		$this->_photo       = $photo;
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
	public function getAge() {
		return $this->_age;
	}
	public function getGenre() {
		return $this->_genre;
	}
	public function getPhoto() {
		return $this->_photo;
	}


}