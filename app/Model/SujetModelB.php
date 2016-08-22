<?php 
namespace Model;
use Model\Sujet;

class SujetModel extends \W\Model\Model {
	private $_listeSujet;

	public function getSujet($idSujetARecuperer){

		$sujet= $this ->find($idSujetARecuperer);


		$ObjetSujet = new Sujet (
			$sujet['nom_sujet'],
			$sujet['photo_sujet'],
			$sujet['description_sujet'],
			$sujet['nom_ci']
			);
        return $ObjetSujet;

	}

		public function getTousSujets() {
			
		$this->setTable('sujet_ci');
		$this->setPrimaryKey('id_sujet');
		$TousSujets = $this->findAll();

		foreach ($TousSujets as $sujet) {
		$this->_listeSujet[] = new Sujet (
			$sujet['nom_sujet'],
			$sujet['photo_sujet']
			);
		}

        return $this->_listeSujet;

	}
}