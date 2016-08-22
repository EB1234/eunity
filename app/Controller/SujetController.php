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
					'sujet' => $UnSujet));


		
	
	}

		// la liste de toute les categorie, dans la vue tu n'a pas forcement toutes les catégories ... Donc la liste se récupérer directement dans la table concerné !

	
	public function categorie($id_centre_interet)
	{
		$db = new SujetModel;
		$db->setTable('sujet_ci');
		$db->setPrimaryKey('id_sujet');
		
		//on récupere l'id dans l'url et on fait afficher la liste des sujets de la catégorie choisie
		
		$ListeDesSujetsDeMaCategorie = $db->getSujetFromCategory($id_centre_interet);
		var_dump($ListeDesSujetsDeMaCategorie); 


		$CI = new CentreInteretModel;
		$CI->setTable('centre_interet');
		$CI->setPrimaryKey('id_centre_interet');

		$ListeDeMesCI = $CI->findAll();

		$this->show('default/home', array(
			'ListeDeSujets' => $ListeDesSujetsDeMaCategorie,
			'ListeDeMesCI'  => $ListeDeMesCI
		));

	}
	// public function salon(){
		
		// $Sal = new SalonModel;
		// $ListeDeSujets = $sal->getListeDeSalons();
		// $this->show('membre/sujet',['ListeDeSalons' => $ListeDeSalons]);
	// }
	// public function salon($id_salon)
	// {
		// $sal = new SujetModel;
		// $sal->setTable('sujet_plusieurs_salons');
		// $sal->setPrimaryKey('id_salon');
		

		// $ListeDeSalons = $sal->findAll();

		// $this->show('membre/sujet',['salon'=> $ListeDeSalons]);
		

	// }

	// public function profil()
	// {
		// $this->show('membre/sujet');


	// }


}