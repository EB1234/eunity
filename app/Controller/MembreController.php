<?php
//nom du dossier dans lequel on est 
namespace Controller;
// permet d'utiliser les fichiers ( une sorte d'inclusion )
use \W\Controller\Controller;
use Model\MembreModel;

class MembreController extends Controller
{

	public function profil()
	{
		//on crée un nouvel objet qui permet de recuperer les données de la base de donnée
		$db= new MembreModel;

		 // on redéfinit le nom de la clé primaire de la table
		$db->setPrimaryKey('id_membre');

		$UnMembre = $db->getMembre(1) ;

		// je vais appeler la vue "profil" et envoyer les données dans le dossier "membre"
		$this->show('membre/profil',['membre'=> $UnMembre]);
		
	}




	public function profil_2()
	{
		//on crée un nouvel objet qui permet de recuperer les données de la base de donnée
		$db= new MembreModel;
		$db->setTable('membre');
		$db->setPrimaryKey('id_membre');

		// -- Récupération du membre en session ...
		$MembreConnecte = $this->getUser();
		$ID_MEMBRE = $MembreConnecte['id_membre'];

		$UnMembre = $db->getMembre(1);

		// je vais appeler la vue "profil" et envoyer les données dans le dossier "membre"
		$this->show('membre/profil_2',['membre'=> $UnMembre]);
		
	}


	

	public function modifier()
	{
			
			// -- Récupération du membre en session ...
			$MembreConnecte = $this->getUser();

			// -- Si la méthode post est détecté
			if($_POST) {

			//pour l'essai
			$ID_MEMBRE = 1;


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
			$db->update($data, $ID_MEMBRE);

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
		$MembreConnecte = $this->getUser();
			

		
			$ID_MEMBRE = 1;


			//$ID_MEMBRE = $MembreConnecte->getId();
			$db = new MembreModel;
			$db->setPrimaryKey('id_membre');
			$db->setTable('membre');

			$db->delete($ID_MEMBRE);
			$this->redirectToRoute('default_home');

	}
}

Class Membre {
	private $_nom;
	private $_prenom;
	private $_pseudo;
	private $_mail;
	private $_nationalite;
	private $_age;
	private $_genre;
	private $_photo;

		public function __construct($nom,$prenom,$pseudo,$mail,$nationalite,$age,$genre,$photo) {
		
		//J'utilise le mot clé $this car il fait référence à mon objet courant.

		//La propriété nom de ma Classe membre, va prendre pour valeur, la valeur transmise au constructeur au moment de l'instanciation.
		$this->_nom 		= $nom;

		//On va procéder de la meme façon pour les autres propriétés.
		$this->_prenom 		= $prenom;
		$this->_pseudo 		= $pseudo;
		$this->_mail 		= $mail;
		$this->_nationalite = $nationalite;		
		$this->_age         = $age;
		$this->_genre       = $genre;
		$this->_photo       = $photo;
	}
	//Getters : Ce sont des fonctions me permettant de retourner la propriété de ma classe. Il y aura donc un getter par propriété.
	public function getNom() {
		//Ici, le Getter va me renvoyer via "return" la valeur de la propriété nomEcole. On procède à l'identique pour chaque propriété.
		return $this->_nom;
	}

	public function getPrenom() {
		return $this->_prenom;
	}
	public function getPseudo() {
		return $this->_pseudo;
	}
	public function getMail() {
		return $this->_mail;
	}
	public function getNationalite() {
		return $this->_nationalite;
	}
	public function getAge() {
		return $this->_age;
	}
	public function getGenre() {
		return $this->_genre;
	}
	public function getPhoto() {
		return $this->_photo;
	}

}