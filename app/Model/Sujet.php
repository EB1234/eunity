<?php 
namespace Model;

class Sujet {

	private $_id_sujet;
	private $_nom_sujet;
	private $_centre_interet;
	private $_sujet_photo;
	private $_description_sujet;

		public function __construct($id_sujet,$nom_sujet,$centre_interet,$sujet_photo,$description_sujet) {

			$this->_id_sujet 			= $id_sujet;
			$this->_nom_sujet 			= $nom_sujet;
			$this->_centre_interet 		= $centre_interet;
			$this->_sujet_photo			= $sujet_photo;
			$this->_description_sujet	= $description_sujet; 

		}

		public function getIdSujet(){
			return $this	->_id_sujet;
		}


		public function getNomSujet(){
			return $this	->_nom_sujet;
		}


		public function getCentreInteret() {
			return $this	->_centre_interet;
		}


		public function getSujetPhoto() {
			return $this	->_sujet_photo;
		}


		public function getDescriptionSujet() {
			return $this	->_description_sujet;
		}

}