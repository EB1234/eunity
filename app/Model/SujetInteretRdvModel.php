<?php 
namespace Model;
use Model\SujetInteretRdv;
use Model\Salon;


class SujetInteretRdvModel extends \W\Model\Model {
	private $_listeSujet;
	private $_listeSalons;

	public function getSujet($idSujetARecuperer){

		$sujet= $this ->find($idSujetARecuperer);


		$ObjetSujet = new SujetInteretRdv (
			$sujet['id_sujet'],
			$sujet['nom_sujet'],
			$sujet['photo_sujet'],
			$sujet['description_sujet'],
			$sujet['id_centre_interet'],
			$sujet['nom_ci']
			);
        return $ObjetSujet;

	}

 //on crée un model pour le CI ET ON RENVOIE LA LISTE AU SujetController
	public function getSujetFromCategory($idCategorie){

		//Renvoie la liste des sujets pour la catégorie passer en parametre
		$TousSujets = $this->search(array('id_centre_interet' => $idCategorie));

		foreach ($TousSujets as $sujet) {
		$this->_listeSujet[] = new SujetInteretRdv (
			
			$sujet['id_sujet'],
			$sujet['nom_sujet'],
			$sujet['photo_sujet'],
			$sujet['description_sujet'],
			$sujet['id_centre_interet'],
			$sujet['nom_ci']
			
			);
		}

        return $this->_listeSujet;

	}


		public function getTousSujets() {
			
		$this->setTable('sujet_ci');
		$this->setPrimaryKey('id_sujet');
		$TousSujets = $this->findAll();

		foreach ($TousSujets as $sujet) {
		$this->_listeSujet[] = new SujetInteretRdv (
			$sujet['id_sujet'],
			$sujet['nom_sujet'],
			$sujet['photo_sujet'],
			$sujet['description_sujet'],
			$sujet['id_centre_interet'],
			$sujet['nom_ci']
			);
		}

        return $this->_listeSujet;

	}

// 	public function getListeSalons(){

// 		$this->setTable('sujet_plusieurs_salons');
// 		$this->setPrimaryKey('id_salon');
// 		$TousSalons = $this->findAll();

// 		foreach ($TousSalons as $salon) {
// 			$this->_listeSalons[] = new Salon (
// 			$salon['id_salon'],
// 			$salon['lieu_rdv'],
// 			$salon['date_rdv'],
// 			$salon['id_membre'],
// 			$salon['nom'],
// 			$salon['photo'],
// 			$salon['id_sujet']
// 			);
// 	}
// 	return $this->_listeSalons;
// }
}




