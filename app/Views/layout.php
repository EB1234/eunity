<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Site d'échange d'opinions entre jeuns adultes de l'Europe permetant de se rencontrer à un endroit de leur choix">
	<meta name="author" content="Emilie B, Lionel L, Baptiste, Nathalie D, Veronica B">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/vendor/shuffle.css') ?>">
	

	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/window.css') ?>">

	
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="<?= $this->url("default_home"); ?>" title="Accueil">Accueil</a></li>							
				
		
					<?php
	 						//print_r($w_user);
	 					
	 					if (null !== $w_user) :	
	 						echo '<li>Bonjour <span class="pseudo-connecte">' . $w_user['pseudo'] . '</span>  | <a href="' . $this->url('deconnexion') . '"?action=deconnexion" title="Déconnexion">Déconnexion</a></li>';
	 						echo '<li><a href="' . $this->url('profil_2') . '"?action=profil" title="Modifier mon profil"><span>Profil</span></li>
</a></li>';
	 					else : ?>
	 						<li><a href="#" id="myBtn">Inscription/Connexion</a></li>
	 				<?php endif; 
	 					  ?>
	
				<!-- Modal content -->	
				<div id="myModal" class="modal">
				
					<div class="modal-content">
						<div class="modal-header">
							<span class="close">Fermer</span>
						</div>
						<div class="modal-body">

								<div class="m-img"><img src="<?= $this->assetUrl('img/logo-eu.png'); ?>" alt="" height="290" width="460">
								</div>
								
								<form id="formInscriptionId" name="formInscription" class="formulaire" method="POST" action="<?php echo $this->url('inscription'); ?>">
									<h5>Vous n'avez pas de compte ?</h5>
																
									<label for="pseudo">pseudo</label>
									<input type="text" id="pseudoId" name="pseudo" placeholder="Votre pseudo" pattern="^[a-zA-Z0-9_]{4,16}$">				
									<span class="msg-error">Veuillez renseigner vos identifiants de connexion</span>
									
									<label for="mail">email</label>
									<input type="email" id="mailId" name="mail" placeholder="Votre adresse@mail.fr">
									<span class="msg-error">Veuillez vérifier le format de votre email</span>
													
									<label for="password">Password</label>
									<input type="password" id="mdpId" name="mdp" placeholder="Votre mot de passe" pattern="^[a-zA-Z0-9]{4,16}$">
									<span class="msg-error">Veuillez renseigner votre mot de passe</span>

									<label for="mdp">Password</label>
									<input type="password" id="mdpBisId" name="mdpBis" placeholder="confirmation de votre mot de passe" pattern="^[a-zA-Z0-9]{4,16}$">
									<span class="msg-error">Veuillez confirmer votre mot de passe</span>
					
																	
									<label for="date_naissance">Date de naissance</label>
									<input type="date" id="dateNaissanceId" name="date_naissance" placeholder="jj/mm/aaaa" max="1998-12-31" min="1920-01-02">
									<span class="msg-error">Veuillez renseigner votre date de naissance</span>
						
									<input type="submit" value="Inscription" class="btn">	
								</form>	
							
								<form id="formConnexionId" name="formConnexion" class="formulaire" method="POST" action="<?php echo $this->url('connexion'); ?>">
									<h5>Vous avez déja un compte ?</h5>

									<label for="pseudo">pseudo</label>
									<input type="text" id="pseudoConnexionId" name="pseudo" placeholder="Votre pseudo" pattern="^[a-zA-Z0-9_]{4,16}$">				
									<span class="msg-error">Veuillez renseigner vos identifiants de connexion</span>
																				
									<label for="password">Password</label>
									<input type="password" id="mdpConnexionId" name="mdp" placeholder="Votre mot de passe" pattern="^[a-zA-Z0-9]{4,16}$">
									<span class="msg-error">Veuillez renseigner votre mot de passe</span>

									<input type="submit" value="Connexion" class="btn">	
								</form>	
						<section class="modal-reseaux">
							<section class="section1"><a href="https://www.facebook.com/login.php?login_attempt=1&lwv=110" target="_blank"><img src="<?= $this->assetUrl('img/logo-fb.png'); ?>" alt="site Facebook" title="site Facebook" height="80" width="80"></a></section>
							<section class="section2"><a href="#"><img src="<?= $this->assetUrl('img/logo-ldin.png'); ?>" alt="site LinledIn" title="site LinledIn" height="80" width="80"></section>
							<section class="section3"><a href="#"><img src="<?= $this->assetUrl('img/logo-twitter.png'); ?>" alt="site Twitter" title="site LinledIn" height="80" width="80"></a></section>
						</section>
					</div>
					</div>
				</div>
			</ul>
		</nav>
	</header>

	<section>
		<?php echo $this->section('main_content') ?>
	</section>
	<footer>
		<ul>
			<li><a href="<?= $this->url("plan"); ?>">Plan du site</a></li>
			<li><a href="<?= $this->url("cgu"); ?>">CGU</a></li>
			<li><a href="<?= $this->url("contact"); ?>">Contact</a></li>
			<p>&copy Emilie, Lionel, Baptiste, Nathalie, Veronica</p>
		</ul>
	</footer>

	<script src="<?= $this->assetUrl('js/shuffle.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/homepage.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/weloveu.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/wmodal2.js'); ?>"></script>
		<script src="<?= $this->assetUrl('js/wmodal3.js'); ?>"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="<?= $this->assetUrl('js/main-formulaire.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/main-connexion.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/main-contact.js'); ?>"></script>
	
	</body>
</html>