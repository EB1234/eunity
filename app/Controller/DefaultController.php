<?php

namespace Controller;

use \W\Controller\Controller;
use Model\SujetModel;
use Model\CentreInteretModel;
use Model\SalonModel;



class DefaultController extends Controller
{

	/**
	 * Page d'accueil
	 */
	public function home()
	{
		$SujetDb = new SujetModel;
		$ListeDeSujets = $SujetDb->getTousSujets();
		
		//$sal = new SalonModel;
		//$ListeDeSalons=$sal->getListeSalons();


		$CI = new CentreInteretModel;
		$CI->setTable('centre_interet');
		$CI->setPrimaryKey('id_centre_interet');
		//on recupere la liste de tous les catégories
		$ListeDeMesCI = $CI->findAll();
		
		
		$this->show('default/home',[
		//'ListeSalons'=>$ListeDeSalons,
		'ListeDeSujets' => $ListeDeSujets,
		'ListeDeMesCI'	=> $ListeDeMesCI
			]);
	}

}