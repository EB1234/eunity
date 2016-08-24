<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/connexion', 'Connexion#connexion', 'connexion'],
		['GET|POST','/deconnexion','Connexion#deconnexion','deconnexion'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],

		['GET', '/profil', 'Membre#profil', 'profil'],
		['GET|POST', '/sujet/[:id_sujet]', 'Sujet#sujet', 'sujet'],
		['GET','/categorie/[:id_centre_interet]','Sujet#categorie','categorie'],
		['GET', '/salon/[:id_salon]', 'Sujet#salon', 'salon'],
	

		['GET|POST','/gestion-sujet', 'Sujet#gestionSujet','gestion_sujet'],
		// SUPPRESSION D'UN SUJET - AJOUTER UNE CONFIRMATION JQUERY//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_suppr'],
		// MODIFICATION D'UN SUJET//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_modif'],

		// -- Affichage du détails d'un SALON, son ORGANISATEUR et ses PARTICIPANTS
		['GET', '/profil-public/[:idsalon]', 'Membre#profil_2', 'profil_2'],
		['GET', '/profil-public/[:idsalon]/', 'Membre#profil_2', 'profil_2bis'],
		
		
 		['GET|POST', '/message_inscription', 'Message_inscription#message', 'message'],

		['GET|POST','/modifier','Membre#modifier','membre_modifier'],
		['GET|POST','/supprimer','Membre#supprimer','membre_supprimer'],

		['GET','/CGU','CGU#cgu','cgu'],
		['GET','/plan','Plan#plan','plan'],

		['GET|POST','/contact','Contact#contact','contact'],
 		['GET|POST','/contact','Contact#contact','ContactForm'],
	);