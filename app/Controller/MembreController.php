<?php
//nom du dossier dans lequel on est 
namespace Controller;
// permet d'utiliser les fichiers ( une sorte d'inclusion )
use \W\Controller\Controller;
use Model\MembreModel;
use Model\Membre;
use Model\Salon;
use Model\SalonModel;
use Model\SujetModel;
use Model\ParticiperModel;
use Controller\InscriptionController;

class MembreController extends Controller
{

	public function profil()
	{
		//on crée un nouvel objet qui permet de recuperer les données de la base de donnée
		$db= new MembreModel;
		$db->setTable('membre');
		$db->setPrimaryKey('id_membre');

		// -- Récupération du membre en session ...
		$MembreConnecte = $this->getUser();
		$ID_MEMBRE = $MembreConnecte['id_membre'];

		$UnMembre = $db->getMembre($ID_MEMBRE);

		// je vais appeler la vue "profil" et envoyer les données dans le dossier "membre"
		$this->show('membre/profil',['membre'=> $UnMembre]);
		
	}

	public function profil_2($idsalon)
	{

		// 1 -- On Récupère le Salon

		$dbSalon = new SalonModel;
		$dbSalon->setTable('salon_rdv');
		$dbSalon->setPrimaryKey('id_salon');

		$Salon = $dbSalon->getSalon($idsalon);

		// 2 -- On récupère le Membre Maitre
		$db= new MembreModel;
		$db->setTable('membre');
		$db->setPrimaryKey('id_membre');
		
		$MembreMaitre = $db->getMembre($Salon->getIdMembreMaitre());

		// 3 -- Récupération des Participants
		$ParticiperModel = new ParticiperModel;
		$ListeDesParticipants = $ParticiperModel->getParticipants($idsalon);

		// 4 -- Transmission des informations à la vue
		$this->show('membre/profil_2',[
			'MembreMaitre'			=> $MembreMaitre,
			'Salon'					=> $Salon,
			'ListeDesParticipants'	=> $ListeDesParticipants
			]);
		
	}

	public function profilPublic($idsalon="", $idmembre=""){

		$dbSalon = new SalonModel;
		$dbSalon->setTable('salon_rdv');
		$dbSalon->setPrimaryKey('id_salon');

		$affichageSalon = $dbSalon->getSalon($idmembre);

		$dbProfilPublic = new MembreModel;
		$dbProfilPublic->setTable('membre');
		$dbProfilPublic->setPrimaryKey('id_membre');

		$affichageProfil = $dbProfilPublic->getMembre($idsalon);

		$dbSujetProfil = new SujetModel;
		$dbSujetProfil->setTable('sujet');
		$dbSujetProfil->setPrimaryKey('id_sujet');

		$affichageSujetProfil = $dbSujetProfil->getSujet($affichageSalon->getIdSujet());

		// $dbParticipants = new ParticiperModel;
		// $dbParticipants->setTable('participer');
		// $dbParticipants->setPrimaryKey('id_membre');

		// $affichageParticipants = $dbParticipants->getParticipants($idmembre);

		$this->show('membre/profil_2',['id' => $idmembre, 'slug' => $idsalon, 'membre' => $affichageProfil, 'affichageSujetProfil' => $affichageSujetProfil, 'affichageSalon' => $affichageSalon]
			);
	}

	public function modifier()
	{
			
			// -- Récupération du membre en session ...
			$MembreConnecte = $this->getUser();

			// -- Si la méthode post est détecté
			if($_POST) {

			
			$ID_MEMBRE = $this->getUser();


			//$ID_MEMBRE = $MembreConnecte->getId();

			// -- Connexion à la base de donnée pour modifier le membre courant
			$db = new MembreModel;
			$db->setPrimaryKey('id_membre');
			$db->setTable('membre');

			$nom_photo= $_FILES['photo']['name'];

			$photo_bdd ='/projet_europe/public/assets/upload/'.$nom_photo;
			$photo_dossier=$_SERVER['DOCUMENT_ROOT'].$photo_bdd;

			copy($_FILES['photo']['tmp_name'],$photo_dossier);		
			
	
			// -- maintenant, tu peu completer le tableau data ... qui mes autres champs de la BDD ...

			// -- Normalement, avant ici, tu doit vérifier les données POST passer en parametre ....

			$data = array(
				'nom'			=>	$_POST['nom'],
				//'mdp'		=>	password_hash($_POST['pwd'], PASSWORD_DEFAULT)
				'prenom'		=>	$_POST['prenom'],
				'mail'			=>  $_POST['mail'],
				'nationalite' 	=>	$_POST['nationalite'],
				'genre'  		=>	$_POST['genre'],
				'photo'			=>	$nom_photo

				);
			
				// -- J'appelle la méthode update du model
			$db->update($data, $ID_MEMBRE['id_membre']);
			// -- Je modifie l'utilisateur en session par les nouvelles informations soumises ... Pour que l'utilisateur en session soit mise a jour ...

			// -- Parce qu'au moment de la connexion on a stocker les infos de l'utilisateur, mais comme il vient de les modifiers, celle stocker en sesison ne sont plus les bonnes ...

			// -- Donc je met a jour la base de donnée, mais aussi la session ...

			// -- Il faudra completer les null apres ...
/* 			ICI C'EST POUR LA SESSION ...
			$NewMembre = new Membre(
				$Membre['id_membre'],
				$_POST['nom'],
				$_POST['prenom'],
				null,
				null,
				$_POST['nationalite'],
				null,
				$_POST['genre'],
				$_POST['photo']
			);
*/
		    // -- Je stock en session.
		    // -- Du coup tu ne peu pas encore le faire, parce qu'il nous faut la classe MembreAuthentificationModel pour stocker l'utilisateur en session ... comme dans la correction ... Et que la connexion doit le faire, donc Emilie ....

		    // -- A prevoir de faire pour après ...
				/*$MembreAuth = new MembreAuthentificationModel;
				$MembreAuth->logUserIn($NewMembre);*/
			// -- A tester ...
			
			// -- je fait une redirection en cas de success
			$this->redirectToRoute('membre_profil');

		}

		$this->show('membre/modifier');

	}


	public function supprimer() {

		 $ID_MEMBRE = $this->getUser();


			//$ID_MEMBRE = $MembreConnecte->getId();
			$db = new MembreModel;
			$db->setPrimaryKey('id_membre');
			$db->setTable('membre');

			$db->delete($ID_MEMBRE['id_membre']);
			$this->redirectToRoute('default_home');

	}
}


