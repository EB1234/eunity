<?php 
namespace Model;

class Sujet {
	private $_nom_sujet;
	private $_sujet_photo;
	private $_description_sujet;
	private $_id_centre_interet;
	private $_centre_interet;
	private $_lieu_rdv;
	private $_date_rdv;


		public function __construct( $id_sujet,$nom_sujet='',$sujet_photo='',$description_sujet='',$_id_centre_interet,$centre_interet='',$lieu_rdv='',$_date_rdv='') {

			$this->_id_sujet			= $id_sujet;
			$this->_nom_sujet			= $nom_sujet;
			$this->_sujet_photo 		= $sujet_photo;
			$this->_description_sujet	= $description_sujet;
			$this->_id_centre_interet   = $_id_centre_interet;
			$this->_centre_interet 		= $centre_interet;
			
		}

		public function getIdSujet() {
			return $this->_id_sujet;
		}

		public function getId() {
			return $this->_id_sujet;
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

		public function getIdCentreInteret(){
		return $this->_id_centre_interet;
		}

		

}