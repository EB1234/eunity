<?php
namespace Model;
use Model\Participer;

class ParticiperModel extends \W\Model\Model{

	public function getParticipants($idSalon){

		$idSalonParticipants = array(
			'id_salon' => $idSalon
		);

		$AffichageSalonParticipants = $this->search($idSalonParticipants);

		foreach ($AffichageSalonParticipants as $value) {
			$this->tableau_participer[] = new Participer(
				$value['id_salon'],
				$value['id_membre'],
				$value['statut']
			);
		}

		return $this->tableau_participer;

	}
}