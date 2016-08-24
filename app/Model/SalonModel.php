<?php 
namespace Model;

class SalonModel extends \W\Model\Model {

	private $_listeSalons;

		//renvoie la liste des salons pour un sujet
	public function getSalonFromSujet($idSujet){
		 $TousSalons = $this->search(array('id_sujet' => $idSujet));

		foreach ($TousSalons as $salon) {

			 $this->_listeSalons[] = new Salon (
			 $salon['id_salon'],
			 $salon['lieu_rdv'],
			 $salon['date_rdv'],
			 null,
			 $salon['id_membre_maitre'],
			 $salon['nom'],
			 $salon['photo'],
			 $salon['id_sujet']
			 );
		 }

         return $this->_listeSalons;

	 }
}

