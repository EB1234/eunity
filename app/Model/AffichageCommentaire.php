<?php
namespace Model;

class AffichageCommentaire {

	private $_id_commentaire;
	private $_id_membre;
	private $_id_sujet;
	private $_commentaire_sujet;
	private $_date_commentaire;
	private $_pseudo;
	private $_photo;
	private $_age_post;

	public function __construct($id_commentaire,$id_membre,$id_sujet,$commentaire_sujet,$date_commentaire,$pseudo,$photo,$age_post){

		$this->_id_commentaire 		= $id_commentaire;
		$this->_id_membre 			= $id_membre;
		$this->_id_sujet 			= $id_sujet;
		$this->_commentaire_sujet 	= $commentaire_sujet;
		$this->_date_commentaire 	= $date_commentaire;
		$this->_pseudo 				= $pseudo;
		$this->_photo 				= $photo;
		$this->_age_post 			= $age_post;

	}

	public function getIdCommentaire(){
		return $this->_id_commentaire;
	}

	public function getIdMembre(){
		return $this->_id_membre;
	}

	public function getIdSujet(){
		return $this->_id_sujet;
	}

	public function getCommentaireSujet(){
		return $this->_commentaire_sujet;
	}

	public function getDateCommentaire(){
		$this->_newDate = date("j F Y - G:i", strtotime($this->_date_commentaire));
		return $this->_newDate;
	}

	public function getPseudo(){
		return $this->_pseudo;
	}

	public function getPhoto(){
		return $this->_photo;
	}

	public function getAgePost(){
		return $this->_age_post;
	}

}