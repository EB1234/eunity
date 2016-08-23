<?php

namespace Controller;

use \W\Controller\Controller;
use Model\SujetModel;
use Controller\AffichageCommentaireController;

class SujetController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */

	public function sujet($id = ""){

		$dbAffichage = new SujetModel;
		$dbAffichage->setTable('sujet');
		$dbAffichage->SetPrimaryKey('id_sujet');

		$affichage = $dbAffichage->find($id);

		// $CommentaireController = new CommentaireController();

		$loggedUser = $this->getUser();		
		$this->show('sujet/sujet',['loggedUser'=>$loggedUser, 'id' => $id, 'affichage' => $affichage, 'affichageCommentaire' => AffichageCommentaireController::AffichageCommentaireSujet($id)]);

	}

	public function gestionSujet($slug ="", $id = ""){

		$modification = "";
		$tousSujets = new SujetModel;


		//SUPRESSION
		if ($slug == "suppression"){

			$dbSuppr = new SujetModel;
			$dbSuppr->setTable('sujet');
			$dbSuppr->setPrimaryKey('id_sujet');
			$dbSuppr->delete($id);

			$this->redirectToRoute('gestion_sujet');

		}

		else {

			$dbModif = new SujetModel;
			$dbModif->setTable('sujet');
			$dbModif->setPrimaryKey('id_sujet');

			$modification = $dbModif->find($id);

			if ($_POST) {

				//MODIF
				if (isset($_POST['id_sujet'])){

					$nom_photo = $_FILES['photo']['name'];
					$photo_bdd = '/USER\convenio-cafe\public\assets\upload\sujet/' . $nom_photo;

					$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . $photo_bdd;

					$data = array(
						// 'id_sujet'			=> null,
						'nom_sujet' 		=> $_POST['titre'],
						'id_centre_interet'	=> null,
						'photo_sujet' 		=> $_POST['photo_actuelle'],
						'description_sujet'	=> $_POST['description']
					);
					
					if (!empty($nom_photo)){	
						copy($_FILES['photo']['tmp_name'], $photo_dossier);
						$data['photo_sujet'] = $photo_bdd;
					}

					$data = $dbModif->update($data, $_POST['id_sujet']);

				}

				//AJOUT
				else {

					$db = new SujetModel;
					$db->setTable('sujet');
					$db->setPrimaryKey('id_sujet');

					$nom_photo = $_FILES['photo']['name'];
					$photo_bdd = '/USER\convenio-cafe\public\assets\upload\sujet/' . $nom_photo;

					$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . $photo_bdd;

					copy($_FILES['photo']['tmp_name'], $photo_dossier);

					$data = array(
						'id_sujet'			=> null,
						'nom_sujet' 		=> $_POST['titre'],
						'id_centre_interet'	=> null,
						'photo_sujet' 		=> $photo_bdd,
						'description_sujet'	=> $_POST['description']
					);

					$data = $db->insert($data);
					
				}

			}
		}

		$this->show('sujet/ajoutModificationSujet',['tousSujets'=> $tousSujets->getTousSujets(), 'id' => $id, 'slug' => $slug, 'modification' => $modification]);
	}
}