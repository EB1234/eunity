<?php 
namespace Model;

class Sujet {
	private $_nom_sujet;
	private $_sujet_photo;
	private $_description_sujet;
	private $_centre_interet;

		public function __construct($nom_sujet,$sujet_photo='',$description_sujet='',$centre_interet='') {

			$this->_nom_sujet = $nom_sujet;
			$this->_sujet_photo = $sujet_photo;
			$this->_description_sujet= $description_sujet; 
			$this->_centre_interet = $centre_interet;

		}

		public function getNomSujet(){
			return $this->_nom_sujet;
		}

		public function getCentreInteret() {
		return $this->_centre_interet;
		}

		public function getSujetPhoto() {
		return $this->_sujet_photo;
		}
		public function getDescriptionSujet() {
		return $this->_description_sujet;
		}

}