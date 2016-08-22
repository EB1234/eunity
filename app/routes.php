<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/connexion', 'Connexion#connexion', 'connexion'],
		['GET|POST','/deconnexion','Connexion#deconnexion','deconnexion'],
		['GET|POST', '/inscription', 'Inscription#inscription', 'inscription'],

		['GET', '/profil', 'Membre#profil', 'profil'],
		['GET', '/sujet/[:id_sujet]', 'Sujet#sujet', 'sujet'],
		['GET','/categorie/[:id_centre_interet]','Sujet#categorie','categorie'],
		['GET', '/salon/[:id_salon]', 'Sujet#salon', 'salon'],

		['GET|POST','/modifier','Membre#modifier','membre_modifier'],
		['GET|POST','/supprimer','Membre#supprimer','membre_supprimer'],

		['GET','/CGU','CGU#cgu','cgu'],
		['GET','/plan','Plan#plan','plan'],
	);