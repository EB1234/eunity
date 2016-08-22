<?php $this->layout('layout', ['title' => 'Connexion']) ?>


	<?php $this->start('header') ?>
	
	<?php $this->stop('header') ?>


	<?php $this->start('main_content');

	print_r($id_membre);


	 ?>


	<h1>Connexion</h1>

	<form method="post" action="">

		<input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo"><br>

		<input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe"><br>

		<input type="submit" value="Connexion" class="btn">

	</form>

		<?php $this->stop('main_content') ?>

	<?php $this->start('footer') ?>

	<?php $this->stop('footer') ?>