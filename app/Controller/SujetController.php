<?php

namespace Controller;

use \W\Controller\Controller;
use Model\SujetModel;
use Model\CentreInteretModel;
use Model\SalonModel;


class SujetController extends Controller
{

	/**
	 * Page sujet selectionnée
	 */
	public function sujet($id_sujet)
		{
		
			//on crée un nouvel objet qui permet de recuperer les données de la base de donnée
			$db = new SujetModel;
			$db->setTable('sujet_ci');
			$db->setPrimaryKey('id_sujet');
		

			//on récupere l'id dans l'url et on fait afficher le sujet choisi 
			$UnSujet = $db->getSujet($id_sujet);
			
		 	$sal = new SalonModel;
			$sal->setTable('sujet_plusieurs_salons');
			$sal->setPrimaryKey('id_salon');
				//on recupere la liste des salons pour un sujet
			$listeDeSalons = $sal-> getSalonFromSujet($id_sujet);
			

		 	$this->show('membre/sujet',array(
						'ListeDeSalons'=> $listeDeSalons,
						'sujet' => $UnSujet,
						'affichageCommentaire' => AffichageCommentaireController::AffichageCommentaireSujet($id_sujet)
						));
	
		}

		// la liste de toute les categorie, dans la vue tu n'a pas forcement toutes les catégories ... Donc la liste se récupérer directement dans la table concerné !

	
	public function categorie($id_centre_interet)
	{
		$db = new SujetModel;
		$db->setTable('sujet_ci');
		$db->setPrimaryKey('id_sujet');
		
		//on récupere l'id dans l'url et on fait afficher la liste des sujets de la catégorie choisie
		
		$ListeDesSujetsDeMaCategorie = $db->getSujetFromCategory($id_centre_interet);
		//var_dump($ListeDesSujetsDeMaCategorie); 


		$CI = new CentreInteretModel;
		$CI->setTable('centre_interet');
		$CI->setPrimaryKey('id_centre_interet');

		$ListeDeMesCI = $CI->findAll();

		$this->show('default/home', array(
			'ListeDeSujets' => $ListeDesSujetsDeMaCategorie,
			'ListeDeMesCI'  => $ListeDeMesCI
		));

	}
	
	public function gestionSujet($slug ="", $id = "") {
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
					$photo_bdd = '\USER\convenio-cafe\public\assets\upload\sujet\/' . $nom_photo;
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
						$data['photo_sujet'] = $nom_photo;
					}
					$data = $dbModif->update($data, $_POST['id_sujet']);
				}
				//AJOUT
				else {
					$db = new SujetModel;
					$db->setTable('sujet');
					$db->setPrimaryKey('id_sujet');
					$nom_photo = $_FILES['photo']['name'];
					$photo_bdd = '\USER\convenio-cafe\public\assets\upload\sujet\/' . $nom_photo;
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