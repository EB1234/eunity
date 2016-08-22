<?php 
namespace Model;
use Model\Sujet;

class SujetModel extends \W\Model\Model {

	private $_listeSujet;

	public function getSujet($idSujetARecuperer){

		$sujet = $this->find($idSujetARecuperer);

		$ObjetSujet = new Sujet (
			$sujet['id_sujet'],
			$sujet['nom_sujet'],
			$sujet['id_centre_interet'],
			$sujet['photo_sujet'],
			$sujet['description_sujet']
			);

        return $ObjetSujet;

	}

	public function getTousSujets() {
		
		$this->setTable('sujet');

		$this->setPrimaryKey('id_sujet');

		$TousSujets = $this->findAll();

		foreach ($TousSujets as $sujet) {

			$this->_listeSujet[] = new Sujet (
				$sujet['id_sujet'],
				$sujet['nom_sujet'],
				$sujet['id_centre_interet'],
				$sujet['photo_sujet'],
				$sujet['description_sujet']
			);

		}

        return $this->_listeSujet;
	}

	public function suppressionSujet(){
		
	}
}