<?php

namespace Controller;

use \W\Controller\Controller;
// use Model\MembreModel;


class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$loggedUser = $this->getUser();		
		$this->show('default/home',['loggedUser'=>$loggedUser]);
	}

	// public function profil()
	// {
	// 	$this->show('membre/profil');


	// }


}