<?php

namespace Controller;

use W\Controller\Controller;
use Model\InscriptionModel;
use W\Model\UsersModel;

class InscriptionController extends Controller
{


	
	/**
	 * Page de inscription
	 */
	public function inscription(){

		function age($date){
		  return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
		}

		if ($_POST){


			// vérifs des données saisies
			// jes vais procéder à mon insersion
			// j'apelle mon modele chargé de l'inscription de mo,n membre

			//j'apelle la methode insert du modele
			// je fais une redirection en cas de succes
			$db = new InscriptionModel;
			$db->setPrimaryKey('id_membre');
			$db->setTable('membre');


			$data = array(
				'id_membre'			=> null,
				'prenom' 			=> null,
				'nom' 				=> null,
				'pseudo' 			=> $_POST['pseudo'],
				'mdp' 				=> password_hash($_POST['mdp'], PASSWORD_DEFAULT),
				'mail' 				=> $_POST['mail'],
				'nationalite'		=> null,
				'statut'			=> 0,
				'photo'				=> null,
				'genre'				=> null,
				'date_naissance' 	=> $_POST['dateNaissance'],
				'age_public'		=> null,
				'date_inscription'	=> date("Y-m-d H:i:s"),
				'autre'				=> null
			);

			$controle = true;
			$messageErreur ="";

			// vérif PSEUDO

			if (empty($_POST['pseudo'])) {
				$controle        = false;
      			$messageErreur  .= 'Veuillez renseigner votre pseudonyme.</br>';
			}

			elseif ($verifPseudo = $db->usernameExists($_POST['pseudo'])) {
				$controle        = false;
      			$messageErreur  .= 'Ce pseudo est déjà utilisé.</br>';
			}

			elseif (!(preg_match ('/^[a-zA-Z0-9_]{4,16}$/',$_POST['pseudo']))) {
		      $controle       = false;
		      $messageErreur .= 'Veuillez vérifier le format de votre pseudo (lettres et chiffres uniquement, entre 4 et 16 caractères).</br>';
    		}
			

			// vérif EMAIL

			if (empty($_POST['mail'])) {
				$controle        = false;
      			$messageErreur  .= 'Veuillez renseigner votre email.</br>';
			}

			elseif ($verifEmail = $db->emailExists($_POST['mail'])) {
				$controle        = false;
      			$messageErreur  .= 'Cet email est déjà utilisé.</br>';
			}


			elseif (!(preg_match ('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',$_POST['mail']))) {
		      $controle       = false;
		      $messageErreur .= 'Veuillez vérifier le format de votre email.</br>';
    		}
			

			// vérif MDP

			if (empty($_POST['mdp'])) {
				$controle        = false;
      			$messageErreur  .= 'Veuillez renseigner votre mot de passe.</br>';
			}

			elseif (!preg_match('/^[a-zA-Z0-9]{4,16}$/',$_POST['mdp'])) {
		      $controle       = false;
		      $messageErreur .= 'Veuillez vérifier le format de votre mot de passe (minimum 4 caractères, maximum 16).</br>';
    		}

			

			// vérif DATE DE NAISSANCE

			if (empty($_POST['dateNaissance'])) {
				$controle        = false;
      			$messageErreur  .= 'Veuillez renseigner votre date de naissance.</br>';
			}

			if (age($_POST['dateNaissance']) < 18) {
				$controle        = false;
      			$messageErreur  .= 'Ce site est réservé aux membres majeurs !</br>';
			}

    		//Si tout est bon, on envoie !

    		if ($controle == true){
				// -- J'appelle la méthode insert du model
				$db->insert($data);

				// -- je fais une redirection en cas de success
				$this->redirectToRoute('default_home');

			}

		    // Affichage des erreurs
		    echo $messageErreur;


		}

		$this->show('inscription/inscription');
	}


}