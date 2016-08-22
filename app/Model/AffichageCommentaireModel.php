<?php

namespace Model;

use Model\AffichageCommentaire;

class AffichageCommentaireModel extends \W\Model\Model {

	public function getAffichageCommentaire($id){
		$idArray = array(
			'id_sujet' => $id
			);		

		$AffichageCommentaire = $this->search($idArray);

		foreach ($AffichageCommentaire as $value) {
		 	$this->tableau_retour[] = new AffichageCommentaire(
		 		$value['id_commentaire'],
				$value['id_membre'],
				$value['id_sujet'],
				$value['commentaire_sujet'],
				$value['date_commentaire'],
				$value['pseudo'],
				$value['photo'],
				$value['age_post']
		 	);
		 }

		 $this->tableau_retour2 = array_reverse($this->tableau_retour);

		 return $this->tableau_retour2;

	}
}