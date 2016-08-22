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
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="<?= $this->url("default_home"); ?>">Accueil</a></li>
				<li><a style="text-decoration:line-through;" href="<?= $this->url("connexion"); ?>">Connexion</a></li>
				<li><a href="#" id="myBtn">Inscription</a></li>
	
						
				<div id="myModal" class="modal">
			<!-- Modal content -->
					<div class="modal-content">
						<div class="modal-header">
							<span class="close">Fermer</span>
						</div>
						<div class="modal-body">
								<div class="m-img"><img src="<?= $this->assetUrl('img/logo-eu.png'); ?>" alt="" height="290" width="460">
								</div>
								<form id="formInscriptionId" name="formInscription" class="formulaire" method="POST" action="<?php echo $this->url("inscription"); ?>">
																
									<label for="pseudo">Pseudo</label>
									<input type="text" id="pseudoId" name="pseudo" placeholder="Votre pseudo">
									
									<label for="mail">email</label>
									<input type="mail" id="mailId" name="mail" placeholder="Votre mail">
									
									<label for="password">Password</label>
									<input type="password" id="mdpId" name="mdp" placeholder="Votre mot de passe">
									
									<label for="dateNaissance">Date de naissance</label>
									<input type="date" id="dateNaissanceId" name="dateNaissance" placeholder="Votre date de naissance">
						
									<input type="submit" value="Inscription" class="btn">	
								</form>	
							
						<div class="modal-reseaux">
							<div class="logo1"><a href="#"><img src="<?= $this->assetUrl('img/logo-fb.png'); ?>" alt="site Facebook" title="site Facebook" height="80" width="80"></a></div>
							<div class="logo2"><a href="#"><img src="<?= $this->assetUrl('img/logo-ldin.png'); ?>" alt="site LinledIn" title="site LinledIn" height="80" width="80"></div>
							<div class="logo3"><a href="#"><img src="<?= $this->assetUrl('img/logo-twitter.png'); ?>" alt="site Twitter" title="site LinledIn" height="80" width="80"></a></div>
						</div>
					</div>
					</div>
				</div>			
			


				<li><a href="<?= $this->url("sujet"); ?>">PAGE TEST SUJET</a></li>
				<li><a style="text-decoration:line-through;" href="<?= $this->url("profil"); ?>">Profil</a></li>	
				<li><input type="texte" name="search"></li>
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
			<li>Contact</li>
			<p>&copy Emilie, Lionel, Baptiste, Nathalie, Veronica</p>
		</ul>
	</footer>

	<script src="<?= $this->assetUrl('js/shuffle.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/homepage.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/weloveu.js'); ?>"></script>
	<script src="<?= $this->assetUrl('js/wmodal2.js'); ?>"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="<?= $this->assetUrl('js/main-formulaire.js'); ?>"></script>

	</body>
</html>