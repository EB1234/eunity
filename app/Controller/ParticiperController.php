<?php
namespace Controller;

use \W\Controller\Controller;
use Model\Participer;
use Model\ParticiperModel;

class ParticiperController extends Controller{

	public function AffichageParticipants($id=""){

		$AffichageParticipants = new ParticiperModel;
		$AffichageParticipants->setTable('participer');
		$AffichageParticipants->setPrimaryKey('id_membre');

		$AffichageListeParticipants = $AffichageParticipants->getParticipants($id);

		return $AffichageListeParticipants;
	}

}