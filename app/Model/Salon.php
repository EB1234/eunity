<?php
namespace Model;

class Salon {

	private $_id_salon;
	private $_id_sujet;
	private $_nombre_participants;
	private $_id_membre_maitre;
	private $_lieu_rdv;
	private $_date_rdv;
	private $_heure_rdv;

	public function __construct($id_salon,$id_sujet,$nombre_participants,$id_membre_maitre,$lieu_rdv,$date_rdv,$heure_rdv){

		$this->_id_salon 			= $id_salon;
		$this->_id_sujet 			= $id_sujet;
		$this->_nombre_participants = $nombre_participants;
		$this->_id_membre_maitre 	= $id_membre_maitre;
		$this->_lieu_rdv 			= $lieu_rdv;
		$this->_date_rdv 			= $date_rdv;
		$this->_heure_rdv 			= $heure_rdv;

	}

	public function getIdSalon(){
		return $this->_id_salon;
	}

	public function getIdSujet(){
		return $this->_id_sujet;
	}

	public function getNombreParticipants(){
		return $this->_nombre_participants;
	}

	public function getIdMembreMaitre(){
		return $this->_id_membre_maitre;
	}

	public function getLieuRdv(){
		return $this->_lieu_rdv;
	}

	public function getDateRdv(){
		$this->_daterdv = date('j F Y', strtotime($this->_date_rdv));
		return $this->_daterdv;
	}

	public function getHeureRdv(){
		$this->_heurerdv = date('G:i', strtotime($this->_heure_rdv));
		return $this->_heurerdv;
	}

}