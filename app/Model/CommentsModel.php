<?php 
namespace Model;
use Model\Comments;
use Model\Sujet;
use Model\Membre;

class CommentsModel extends \W\Model\Model {

	private $_listeComments;

	public function getIdCommentaire($idCommentaireARecuperer){

		$Commentaire_membre = $this->find($idCommentaireARecuperer);

			$ObjetCommentaire_membre = new commentaire_membre (
				$commentaire_membre['id_membre'],
				$commentaire_membre['id_sujet'],
				$commentaire_membre['commentaire_sujet']

			);

        return $ObjetCommentaire_membre;

	}

	public function getTousComments() {
		
		$this->setTable('commentaire_membre');

		$this->setPrimaryKey('id_commentaire');

		$TousComments = $this->findAll();

		foreach ($TousComments as $Comments) {

			$this->_listeComments[] = new Comments (
				$commentaire_membre['id_commentaire'],
				$commentaire_membre['id_membre'],
				$commentaire_membre['id_sujet'],
				$commentaire_membre['commentaire_sujet']
			);

		}

        return $this->_listeComments;
	}

	/* public function suppressionSujet(){
		
	} */
}