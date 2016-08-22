<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/connexion', 'Connexion#connexion', 'connexion'],
		['GET|POST','/deconnexion','Connexion#deconnexion','deconnexion'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],
		
		['GET|POST','/gestion-sujet', 'Sujet#gestionSujet','gestion_sujet'],
		// SUPPRESSION D'UN SUJET - AJOUTER UNE CONFIRMATION JQUERY//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_suppr'],
		// MODIFICATION D'UN SUJET//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_modif'],
		
		['GET|POST','/comments', 'Comments#comments','comments'],
		

		['GET', '/profil', 'Membre#profil', 'profil'],
		['GET', '/profil2/', 'Membre#profil_2', 'profil_2'],
		['GET', '/sujet', 'Sujet#sujet', 'sujet'],
		['GET|POST', '/message_inscription', 'Message_inscription#message', 'message'],

		['GET|POST','/modifier','Membre#modifier','membre_modifier'],
		['GET|POST','/supprimer','Membre#supprimer','membre_supprimer'],

		['GET','/CGU','CGU#cgu','cgu'],
		['GET','/plan','Plan#plan','plan'],
		['GET|POST','/contact','Contact#contact','contact'],
		['GET|POST','/contact','Contact#contact','ContactForm'],
	);