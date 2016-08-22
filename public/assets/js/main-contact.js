$(document).ready(function() {

	console.log('DOM chargé');

	/* **********************************************
		CIBLAGE DES ELEMENTS CONTACT
	********************************************* */

	var $formContact = $('#formContactId');
	var $elementNom = $('#nomId');
	var $elementPrenom = $('#prenomId');	
	var $elementMail = $('#mailId');
	var $elementTel = $('#telephoneId');
	var $elementPays = $('#paysId');
	// cacher les messages d'erreur
	$('span.msg-error').hide();

	/* **********************************************
		VALIDATION DU FORMULAIRE
	********************************************* */
	$formContact.on('submit', function(event)
	{
		console.log('Tentative d\'envoi du form');
		

		var erreurs = [];
		// cacher les messages d'erreur

		// récupération/validation des champs
		var nom = $elementNom.val();
		var prenom = $elementPrenom.val();
		var telephone = $elementTel.val();
		var pays = $elementPays;

		//suppression des notifications d'erreurs dans le DOM		
		//$("span.msg-error").remove();
		//var erreurs = [];
		// validation du nom
		var nomPattern = new RegExp($elementNom.attr('pattern'));
		var nomValide = nomPattern.test( nom );
		console.log( nom, nomPattern, nomValide );
		
		if (! nomValide) {
			erreurs.push({
				'id': $elementNom.attr('id'), 
				'msg': 'Veuillez vérifier le format de votre nom.'
			});
		}
		
		//vérification du prénom
		var prenomPattern = new RegExp($elementPrenom.attr('pattern'));
		var prenomValide = prenomPattern.test( prenom );
		console.log( prenom, prenomPattern, prenomValide );

		if (! prenomValide) {
			erreurs.push({
				'id': $elementPrenom.attr('id'), 
				'msg': 'Veuillez vérifier le format de votre prenom.'
			});
		}
	
		//vérification du telephone
		var telephonePattern = new RegExp($elementTel.attr('pattern'));
		var telephoneValide = telephonePattern.test( telephone );
		console.log( telephone, telephonePattern, telephoneValide );

		if (! telephoneValide) {
			erreurs.push({
				'id': $elementTel.attr('id'), 
				'msg': 'Veuillez vérifier le format de votre telephone.'
			});
		}
	
	

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

	