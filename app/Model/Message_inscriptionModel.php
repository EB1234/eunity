<?php
namespace Model;

use Model\Membre;

class MembreModel extends \W\Model\Model {
	

	//récuperation de l'id grace à $db->setPrimaryKey('id_membre') définit dans le fichier MembreController
	public function getMembre($idMembreARecuperer){

		//// Récupère une ligne de la table en fonction de l'identifiant id_membre
		$Membre = $this -> find($idMembreARecuperer);
		
			//creation de l'objet $ObjetMembre qui va récuperer les données de la base de données 
		$ObjetMembre = new Membre(
			$Membre['nom'],
			$Membre['prenom'],
			$Membre['pseudo'],
			$Membre['mail'],
			$Membre['nationalite'],
			$Membre['age_public'],
			$Membre['genre'],
			$Membre['photo']
			);

		return $ObjetMembre;

		}
}
