<?php
namespace Model;
use Model\Participer;
use Model\MembreModel;

class ParticiperModel extends \W\Model\Model{

	public function getParticipants($idSalon){

		$idSalonParticipants = array(
			'id_salon' => $idSalon
		);

		$AffichageSalonParticipants = $this->search($idSalonParticipants);

		foreach ($AffichageSalonParticipants as $value) {

			$idmembre = $value['id_membre'];

			$db= new MembreModel;
			$db->setTable('membre');
			$db->setPrimaryKey('id_membre');

			$this->tableau_participer[] = $db->getMembre($idmembre);
		}

		return $this->tableau_participer;

	}
}