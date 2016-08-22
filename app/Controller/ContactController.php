<?php

namespace Controller;

use W\Controller\Controller;
use Model\ContactFormModel;


class ContactController extends Controller
{

	public function contact()
	{	

		$controle = true;
		$messageErreur = "";

		if ($_POST){

			//j'apelle la methode insert du modele
			// je fais une redirection en cas de succes
			$db = new ContactFormModel;
			$db->setPrimaryKey('id_contact');
			$db->setTable('contact');


			$data = array(
				'id_contact'		=> null,
				'nom' 				=> $_POST['nom'],
				'prenom' 			=> $_POST['prenom'],
				'mail' 				=> $_POST['mail'],
				'telephone'			=> $_POST['telephone'],
				'pays'				=> $_POST['pays'],
				'commentaire'		=> $_POST['commentaire'],
			);

			// vérif PSEUDO

			if (empty($_POST['nom'])) {
				$controle        = false;
      			$messageErreur  .= '<span class="contact-message">Veuillez renseigner votre nom.</br></span>';
			}			

			// vérif EMAIL

			if (empty($_POST['mail'])) {
				$controle        = false;
      			$messageErreur  .= '<span class="contact-message">Veuillez renseigner votre email.</br></span>';
			}

			/*elseif ($verifEmail = $db->emailExists($_POST['mail'])) {
				$controle        = false;
      			$messageErreur  .= 'Cet email est existe déjà.</br>';
			}*/


			elseif (!(preg_match ('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',$_POST['mail']))) {
		      $controle       = false;
		      $messageErreur .= '<span class="contact-message">Veuillez vérifier le format de votre email.</br></span>';
    		}
			
			/* if (empty($_POST['commentaire'])) {
				$controle        = false;
      			$messageErreur  .= 'Veuillez écrire votre message.</br>';
			}

			 elseif (!(preg_match ('/^[a-zA-Z0-9_]{5,160}$/',$_POST['commentaire']))) {
		      $controle       = false;
		       $messageErreur .= 'Veuillez vérifier le format de votre message (lettres et chiffres uniquement, entre 10 et 160 caractères).</br>';
     		} */
			
			
			
    		if ($controle) {
				// -- J'appelle la méthode insert du model
				$db->insert($data);
				$messageErreur = '<p class="contact-message">Merci, votre envoi à bien été effectué. Nous reviendrons vers vous rapidement.</p>';

			 }

		    // Affichage des erreurs
		}

		$this->show('footer/contact', ['messageErreur' => $messageErreur]);
	}

}


?>

