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
		
		//on crée un nouvel objet qui permet de recuperer les données de la base de donnée
		$db = new SujetModel;
		$db->setTable('sujet_ci');
		$db->setPrimaryKey('id_sujet');


		$UnSujet = $db->getSujet(2);

		
		$this->show('membre/sujet',['sujet'=> $UnSujet]);
		
	}

	// public function profil()
	// {
	// 	$this->show('membre/profil');


	// }


}