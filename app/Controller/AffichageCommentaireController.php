<?php

namespace Controller;

use \W\Controller\Controller;
use Model\AffichageCommentaireModel;
use Model\AffichageCommentaire;

class AffichageCommentaireController extends Controller
{

	public function AffichageCommentaireSujet($id = ""){

		$commentaireSujet = new AffichageCommentaireModel;
		$commentaireSujet->setTable('affichage_commentaire');
		$commentaireSujet->setPrimaryKey('id_commentaire');

		$affichageSujet = $commentaireSujet->getAffichageCommentaire($id);

		return $affichageSujet;

	}
}