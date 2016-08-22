<?php

namespace Controller;

use \W\Controller\Controller;
use Model\SujetModel;


class SujetController extends Controller
{


	/**
	 * Page d'accueil par défaut
	 */
	public function sujet()
	{
		$loggedUser = $this->getUser();		
		$this->show('membre/sujet',['loggedUser'=>$loggedUser]);
	}

	public function gestionSujet($slug ="", $id = ""){

		$modification = "";
		$tousSujets = new SujetModel;

		if ($slug == "suppression"){

			$dbSuppr = new SujetModel;
			$dbSuppr->setTable('sujet');
			$dbSuppr->setPrimaryKey('id_sujet');
			$dbSuppr->delete($id);

			$this->redirectToRoute('gestion_sujet');

		}

		elseif ($slug == "modification"){


				$dbModif = new SujetModel;
				$dbModif->setTable('sujet');
				$dbModif->setPrimaryKey('id_sujet');

				$modification = $dbModif->find($id);

			if ($_POST) {
				
				$nom_photo = $_FILES['photo']['name'];
				$photo_bdd = '/USER\convenio-cafe\public\assets\upload\sujet/' . $nom_photo;

				$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . $photo_bdd;

				$data = array(
					'nom_sujet' 		=> $_POST['titre'],
					'id_centre_interet'	=> null,
					'photo_sujet' 		=> $photo_bdd,
					'description_sujet'	=> $_POST['description']
				);
				
				copy($_FILES['photo']['tmp_name'], $photo_dossier);

				$modif = $dbModif->update($data, $id);

			}
		}

		// else {

		// 	if ($_POST) {

		// 		$db = new SujetModel;
		// 		$db->setTable('sujet');
		// 		$db->setPrimaryKey('id_sujet');

		// 		$nom_photo = $_FILES['photo']['name'];
		// 		$photo_bdd = '/USER\convenio-cafe\public\assets\upload\sujet/' . $nom_photo;

		// 		$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . $photo_bdd;

		// 		copy($_FILES['photo']['tmp_name'], $photo_dossier);

		// 		$data = array(
		// 			'id_sujet'			=> null,
		// 			'nom_sujet' 		=> $_POST['titre'],
		// 			'id_centre_interet'	=> null,
		// 			'photo_sujet' 		=> $photo_bdd,
		// 			'description_sujet'	=> $_POST['description']
		// 		);

		// 		$data = $db->insert($data);
		// 	}
		// }

		$this->show('sujet/ajoutModificationSujet',['tousSujets'=> $tousSujets->getTousSujets(),'data' => $_FILES, 'id' => $id, 'slug' => $slug, 'modification' => $modification]);
	}
}