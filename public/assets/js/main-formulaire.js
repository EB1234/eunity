$(document).ready(function() {

	console.log('DOM chargé');

	/* **********************************************
		CIBLAGE DES ELEMENTS INSCRIPTION
	********************************************* */

	var $formInscription = $('#formInscriptionId');
	var $elementPseudo = $('#pseudoId');
	var $elementMail = $('#mailId');
	var $elementMotDePasse = $('#mdpId');
	var $elementMotDePasseBis = $('#mdpBisId');
	var $elementDateNaissance = $('#date_naissanceId');
	// cacher les messages d'erreur
	$('span.msg-error').hide();

	/* **********************************************
		VALIDATION DU FORMULAIRE
	********************************************* */
	$formInscription.on('submit', function(event)
	{
		console.log('Tentative d\'envoi du form');

		var erreurs = [];
		// TODO (re)cacher les messages d'erreur

		// récupération/validation des champs
		var pseudo = $elementPseudo.val();
		var motDePasse = $elementMotDePasse.val();
		var motDePasseBis = $elementMotDePasseBis.val();
		var dateNaissance = $elementDateNaissance;

		// validation du pseudo

		var pseudoPattern = new RegExp($elementPseudo.attr('pattern'));
		var pseudoValide = pseudoPattern.test( pseudo );
		console.log( pseudo, pseudoPattern, pseudoValide );
		
		
		//suppression des notifications d'erreurs dans le DOM
		//$("p.error").remove();
		//var erreurs = [];

		if (! pseudoValide) {
			erreurs.push({
				'id': $elementPseudo.attr('id'), 
				'msg': 'Veuillez vérifier le format de votre pseudo.'
			});
		}
	
		// validation du mot de passe (et de sa confirmation)
		var motDePassePattern = new RegExp($elementMotDePasse.attr('pattern'));
		var motDePasseValide = motDePassePattern.test( motDePasse );
		console.log( motDePasse, motDePassePattern, motDePasseValide );
		if (! motDePasseValide) {
			erreurs.push({
				'id': $elementMotDePasse.attr('id'), 
				'msg': 'Veuillez vérifier le format de votre mot de passe.'
			});
		}
		else if (motDePasse !== motDePasseBis) {
			erreurs.push({
				'id': $elementMotDePasseBis.attr('id'), 
				'msg': 'Les mots de passe ne correspondent pas.'
			});
		}
		
		
		// validation date
	/*  	var dateNaissance = new Date();	
		var dateNaissanceValide = dateNaissance.test(dateNaissance);
		console.log( dateNaissance, dateNaissanceValide, dateNaissanceExiste ); 		
		if (! dateNaissance) {
			erreurs.push({
				'id': $elementDateNaissance('id'), 
				'msg': 'Veuillez renseigner votre date de naissance.'
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

	