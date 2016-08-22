<?php
namespace Controller;

use \W\Controller\Controller;
use Model\SujetModel;
use Model\AffichageCommentaireController;
use Model\Membre;
use Model\MembreModel;
use Model\Salon;
use Model\SalonModel;
use Model\Participer;
use Model\ParticiperModel;

class ProfilPublicController extends Controller
{

	public function profilPublic($slug="", $id=""){

		$dbSalon = new SalonModel;
		$dbSalon->setTable('salon_rdv');
		$dbSalon->setPrimaryKey('id_salon');

		$affichageSalon = $dbSalon->getSalon($id);

		$dbProfilPublic = new MembreModel;
		$dbProfilPublic->setTable('membre');
		$dbProfilPublic->setPrimaryKey('id_membre');

		$affichageProfil = $dbProfilPublic->getMembre($slug);

		$dbSujetProfil = new SujetModel;
		$dbSujetProfil->setTable('sujet');
		$dbSujetProfil->setPrimaryKey('id_sujet');

		$affichageSujetProfil = $dbSujetProfil->getSujet($affichageSalon->getIdSujet());

		$dbParticipants = new ParticiperModel;
		$dbParticipants->setTable('participer');
		$dbParticipants->setPrimaryKey('id_membre');

		$affichageParticipants = $dbParticipants->getParticipants($id);

		$this->show('membre/profil-public',['id' => $id, 'slug' => $slug, 'affichageProfil' => $affichageProfil, 'affichageSujetProfil' => $affichageSujetProfil, 'affichageSalon' => $affichageSalon, 'affichageParticipants' => $affichageParticipants]);
	}
}