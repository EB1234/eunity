<?php
namespace Model;

class Participer {

	private $_id_salon;
	private $_id_membre;
	private $_statut;

	public function __construct($id_salon,$id_membre,$statut){
		$this->_id_salon 	= $id_salon;
		$this->_id_membre 	= $id_membre;
		$this->_statut 		= $statut;
	}

	public function getIdSalon(){
		return $this->_id_salon;
	}

	public function getIdMembre(){
		return $this->_id_membre;
	}

	public function getStatut(){
		return $this->_statut;
	}

}