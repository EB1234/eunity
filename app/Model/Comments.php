<?php 
namespace Model;

class Comments {
	
	private $_id_commentaire;
	private $_id_membre;
	private $_id_sujet;
	private $_commentaire_sujet;

		public function __construct($id_commentaire, $id_membre, $id_sujet, $commentaire_sujet) {

			$this->_id_commentaire 			= $id_commentaire;
			$this->_id_membre 				= $id_membre;
			$this->_id_sujet 				= $id_sujet;
			$this->_commentaire_sujet		= $commentaire_sujet;


		}

		public function getIdCommentaire(){
			return $this->_id_commentaire;
		}


		public function getIdMembre(){
			return $this->_id_membre;
		}


		public function getIdSujet() {
			return $this->_id_sujet;
		}


		public function getCommentaireSujet() {
			return $this->_commentaire_sujet;
		}

}