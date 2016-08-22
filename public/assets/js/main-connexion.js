$(document).ready(function() {

	console.log('DOM chargé');


	/* **********************************************
		CIBLAGE DES ELEMENTS CONNEXION
	********************************************* */

		var $formConnexion = $('#formConnexionId');
		var $elementPseudo = $('#pseudoConnexionId');
		var $elementMotDePasse = $('#mdpConnexionId');
			
		$('span.msg-error').hide();

		$formConnexion.on('submit', function(event)
		{
		console.log('Tentative d\'envoi du form');

		var erreurs = [];

		var pseudo = $elementPseudo.val();
		var motDePasse = $elementMotDePasse.val();
		

		// validation du pseudo	
		
		var pseudoPattern = new RegExp($elementPseudo.attr('pattern'));
		var pseudoValide = pseudoPattern.test( pseudo );
		console.log( pseudo, pseudoPattern, pseudoValide );

		if (! pseudo) {
			erreurs.push({
				'id': $elementPseudo.attr('id'),  
				'msg': 'Veuillez renseigner vos identifiants de connexion.'
			});
		}
/* 		else if(pseudo !== $elementPseudo ) {
			erreurs.push({
				'id': $elementPseudo.attr('id'), 
				'msg': 'Vos identifiants de connexion sont incorrects.'
			});
		} */

		// validation du mot de passe (et de sa confirmation)
	 	var motDePassePattern = new RegExp($elementMotDePasse.attr('pattern'));
		var motDePasseValide = motDePassePattern.test( motDePasse );
		console.log( motDePasse, motDePassePattern, motDePasseValide );
		if (! motDePasseValide) {
			erreurs.push({
				'id': $elementMotDePasse.attr('id'), 
				'msg': 'Veuillez vérifier le format de votre mot de passe'
			});
		}
/* 		else if (motDePasseValide !== motDePasse) {
			erreurs.push({
				'id': $elementMotDePasseBis.attr('id'), 
				'msg': 'Les mots de passe ne correspondent pas'
			});
		} */


		// si il y a des erreurs,
		// je ne veux pas envoyer les données
		if (erreurs.length !== 0) {
			// CONSIGNE
			// TODO afficher les erreurs dans le DOM

			erreurs.forEach(
				function(erreur) {
					// je sélectionne chaque champ help-block
					// directement précédé d'un élément en erreur
					var erreurId = '#' + erreur.id + ' + .msg-error' ;
					var $err = $(erreurId);
					$err.show();
				}
			);

			console.log( erreurs );

			event.preventDefault();
		}

	});
});
