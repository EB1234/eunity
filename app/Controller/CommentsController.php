<?php

namespace Controller;

use \W\Controller\Controller;
use Model\CommentsModel;
use Model\SujetModel;
use Model\MembreModel;


class CommentsController extends Controller
{

	/**
	 * Page comments selectionnée
	 */
	public function Comments()
		{
		
		//on crée un nouvel objet qui permet de recuperer les données de la base de donnée
		$db = new CommentsModel;
		//$db->setTable('comments_ci');
		$db->setPrimaryKey('id_commentaire');

		//on récupere l'id dans l'url et on fait afficher le sujet choisi 
		$UnComments = $db->getIdCommentaire(1);


		//parce que tu doit récupérer la liste de toute les categorie, dans la vue tu n'a pas forcement toutes les catégories ... Donc la liste se récupérer directement dans la table concerné !

		

		$this->show('membre/comments',[
			'comments'	=> $UnComments
		]);
		
	}
/* 	public function categorie($id_centre_interet)
	{
		$db = new CommentsModelModel;
		$db->setTable('comments_ci');
		$db->setPrimaryKey('id_commentaire');
		
		//on récupere l'id dans l'url et on fait afficher la categorie choisi 
		$ListeDesSujetsDeMaCategorie = $db->getSujetFromCategory($id_centre_interet);
		//var_dump($ListeDesSujetsDeMaCategorie); OK


		$CI = new CentreInteretModel;
		$CI->setTable('centre_interet');
		$CI->setPrimaryKey('id_centre_interet');

		$ListeDeMesCI = $CI->findAll();

		$this->show('default/home', array(
			'ListeDeSujets' => $ListeDesSujetsDeMaCategorie,
			'ListeDeMesCI'  => $ListeDeMesCI
		));

	} */

	// public function profil()
	// {
	// 	$this->show('membre/profil');


	// }


}