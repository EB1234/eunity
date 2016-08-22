<?php

namespace Controller;

use W\Controller\Controller;
use Model\ConnexionModel;
use Model\MembreModel;

class ConnexionController extends Controller
{

	/**
	 * Page de connexion
	 */

	public function connexion() {
		
		// -- Récupération et Vérification des Données POST
		if($_POST) {
			
			// -- Création d'une instance de ma classe MembreAuthentificationModel
			$db = new ConnexionModel;

			// -- Vérification de mon utilisateur avec la BDD
			// -- Utilisation de la fonction  : isValidLoginInfo($usernameOrEmail, $plainPassword)
			$ID_MEMBRE = $db->isValidLoginInfo($_POST['pseudo'], $_POST['mdp']);
			
			// -- Tous est ok on le connecte
			if($ID_MEMBRE > 0) {
				//Si l'ID du MEMBRE est > 0 j'ai donc un tirage gagnant !
				
				//je créer une instance de MembreModel
				$Membre = new MembreModel;
				// -- Je précise pour W la clé primaire de ma table
				$Membre->setPrimaryKey('id_membre');
				// -- Ainsi que la table a utiliser !
				$Membre->setTable('membre');
				
				// 1 - je récupère les données du membre connecté en BDD via MembreModel
				
				// 2 - Puis je le passe en session via logUserIn
				$db->logUserIn($Membre->find($ID_MEMBRE));
		
				// 3 -- Puis on le redirige
				$this->redirectToRoute('default_home');
			}
		
			
		}
		
		// -- Envoi à la vue connexion
		$this->show('connexion');
		
	}


}