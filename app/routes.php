<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/connexion', 'Connexion#connexion', 'connexion'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],

		['GET', '/profil', 'Membre#profil', 'profil'],
		['GET|POST', '/profil-public/[:slug]/[i:id]', 'ProfilPublic#profilPublic', 'profil_public'],
		['GET|POST', '/sujet/[i:id]', 'Sujet#sujet', 'sujet'],

		['GET|POST','/gestion-sujet', 'Sujet#gestionSujet','gestion_sujet'],
		// SUPPRESSION D'UN SUJET - AJOUTER UNE CONFIRMATION JQUERY//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_suppr'],
		// MODIFICATION D'UN SUJET//
		['GET|POST','/gestion-sujet/[:slug]/[i:id]', 'Sujet#gestionSujet','gestion_sujet_modif'],

		['GET|POST','/modifier','Membre#modifier','membre_modifier'],
		['GET|POST','/supprimer','Membre#supprimer','membre_supprimer'],

		['GET','/CGU','CGU#cgu','cgu'],
		['GET','/plan','Plan#plan','plan']
	);