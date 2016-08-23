<?php 
namespace Model;

class SalonModel extends \W\Model\Model {

	private $_listeSalons;

		//renvoie la liste des salons pour un sujet
	public function getSalonFromSujet($idSujet){
		 $TousSalons = $this->search(array('id_sujet' => $idSujet));

		foreach ($TousSalons as $salon) {
			 //id_salon,$lieu_rdv,$date_rdv='',$id_membre,$nom='',$photo='',$id_sujet
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

	 public function getSalon($idSalon){

		$salon = $this->find($idSalon);

		//$id_salon,$id_sujet,$nombre_participants,$id_membre_maitre,$lieu_rdv,$date_rdv,$heure_rdv

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

