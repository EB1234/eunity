<?php
	
	$w_routes = array(

		// - Accueil
		['GET', '/', 'Default#home', 'default_home'],

		// -- Connexion
		['GET|POST', '/connexion', 'Connexion#connexion', 'connexion'],
		['GET|POST', '/connexion/', 'Connexion#connexion', 'connexionbis'],

		// -- Deconnexion
		['GET|POST','/deconnexion','Connexion#deconnexion','deconnexion'],
		['GET|POST','/deconnexion/','Connexion#deconnexion','deconnexionbis'],

		// -- Inscription
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],
		['GET|POST', '/inscription/', 'Inscription#inscription', 'inscriptionbis'],

		// -- Profil, Sujet, Categorie et Salon
		['GET', '/profil', 'Membre#profil', 'profil'],
		['GET', '/profil/', 'Membre#profil', 'profilbis'],


		['GET', '/sujet/[:id_sujet]', 'Sujet#sujet', 'sujet'],
		['GET', '/sujet/[:id_sujet]/', 'Sujet#sujet', 'sujetbis'],

		['GET','/categorie/[:id_centre_interet]','Sujet#categorie','categorie'],
		['GET','/categorie/[:id_centre_interet]/','Sujet#categorie','categoriebis'],

		['GET', '/salon/[:id_salon]', 'Sujet#salon', 'salon'],
		['GET', '/salon/[:id_salon]/', 'Sujet#salon', 'salonbis'],

		// -- Gestion des Sujets
		['GET|POST','/gestion-sujet', 'Sujet#gestionSujet','gestion_sujet'],
		['GET|POST','/gestion-sujet/', 'Sujet#gestionSujet','gestion_sujetbis'],
		
			// SUPPRESSION D'UN SUJET - AJOUTER UNE CONFIRMATION JQUERY//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_suppr'],
		['GET|POST','/gestion-sujet/[:slug]/[i:id]/', 'Sujet#gestionSujet','gestion_sujet_supprbis'],
		
			// MODIFICATION D'UN SUJET//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_modif'],
		['GET|POST','/gestion-sujet/[:slug]/[i:id]/', 'Sujet#gestionSujet','gestion_sujet_modifbis'],

		// -- Affichage du détails d'un SALON, son ORGANISATEUR et ses PARTICIPANTS
		['GET', '/profil-public/[:idsalon]', 'Membre#profil_2', 'profil_2'],
		['GET', '/profil-public/[:idsalon]/', 'Membre#profil_2', 'profil_2bis'],
		//['GET|POST', '/profil-public/[:idsalon]/[i:idmembre]', 'Membre#profilPublic', 'profil_2'],

		// -- Gestion des Membres
 		['GET|POST', '/message_inscription', 'Message_inscription#message', 'message'],
 		['GET|POST', '/message_inscription/', 'Message_inscription#message', 'messagebis'],

		['GET|POST','/modifier','Membre#modifier','membre_modifier'],
		['GET|POST','/modifier/','Membre#modifier','membre_modifierbis'],


		['GET|POST','/supprimer','Membre#supprimer','membre_supprimer'],
		['GET|POST','/supprimer/','Membre#supprimer','membre_supprimerbis'],

		['GET','/CGU','CGU#cgu','cgu'],
		['GET','/CGU/','CGU#cgu','cgubis'],

		['GET','/plan','Plan#plan','plan'],
		['GET','/plan/','Plan#plan','planbis'],

		['GET|POST','/contact','Contact#contact','contact'],
 		//['GET|POST','/contact','Contact#contact','ContactForm'],
	);