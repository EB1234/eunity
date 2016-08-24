<?php 
namespace Model;

class Salon {

	private $_id_salon; 
	private $_lieu_rdv;
	private $_date_rdv;
	private $_open_close;
	private $_id_membre;
	private $_nom;
	private $_photo;
	private $_id_sujet;

	public function __construct( $id_salon,$lieu_rdv,$date_rdv='',$open_close='',$id_membre,$nom='',$photo='',$id_sujet) {

			$this->_id_salon			= $id_salon;
			$this->_lieu_rdv			= $lieu_rdv;
			$this->_date_rdv 		    = $date_rdv;
			$this->_open_close		    = $open_close;
			$this->_id_membre			= $id_membre;;
			$this->_nom   				= $nom;
			$this->_photo               = $photo;
			$this->_id_sujet 			= $id_sujet;

		}

		public function getIdSalon() {
			return $this->_id_salon;
		}

		public function getLieuRdv(){
			return $this->_lieu_rdv;
		}

		public function getDateRdv() {
		return $this->_date_rdv;
		}
		public function getOpenClose(){
		return $this->_open_close;
		}

		public function getIdMembre() {
		return $this->_id_membre;
		}
		public function getNom() {
		return $this->_nom;
		}

		public function getPhoto() {
		return $this->_photo;
		}

		public function getIdSujet(){
		return $this->_id_sujet;
		}

	

}
