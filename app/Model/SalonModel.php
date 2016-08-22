<?php
namespace Model;
use Model\Salon;

class SalonModel extends \W\Model\Model{

	public function getSalon($idSalon){

		$salon = $this->find($idSalon);

		$ObjetSalon = new Salon(
			$salon['id_salon'],
			$salon['id_sujet'],
			$salon['nombre_participants'],
			$salon['id_membre_maitre'],
			$salon['lieu_rdv'],
			$salon['date_rdv'],
			$salon['heure_rdv']
		);

		return $ObjetSalon;

	}

}