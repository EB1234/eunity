<?php $this->layout('layout', ['title' => 'Inscription']) ?>


	<?php $this->start('header') ?>
	
	<?php $this->stop('header') ?>


	<?php $this->start('main_content');

	// print_r($id_membre);


	 ?>
	<main class="container">
		<fieldset class="form">

			<legend>Je m'inscrit !</legend>

			<form method="POST" action="<?php echo $this->url("inscription"); ?>">			

				<label for="pseudo">pseudo</label>
				<input type="text" id="pseudoId" name="pseudo" placeholder="Votre pseudo">

				<label for="mail">email</label>
				<input type="mail" id="mailId" name="mail" placeholder="Votre mail">

				<label for="password">Password</label>
				<input type="password" id="mdpId" name="mdp" placeholder="Votre mot de passe">

				<label for="dateNaissance">Date de naissance</label>
				<input type="date" id="dateNaissanceId" name="dateNaissance" placeholder="Votre date de naissance">
	

				<input type="submit" value="Inscription" class="btn">

			</form>
		</fieldset>
	</main>
		<?php $this->stop('main_content') ?>

	<?php $this->start('footer') ?>

	<?php $this->stop('footer') ?>