<?php $this->layout('layout', ['title' => 'Modification']) ?>

<?php $this->start('main_content') ?>
	<!-- A titre d'exemple je simplifie le formulaire et son traitement 
	
	ICI, les données POST de mon formulaire seront transmise au controleur de ma vue inscription, à savoir .... MEMBRE ....
	-->
	<form method="POST" enctype="multipart/form-data">
		<input type="text" name="nom" placeholder="Nom" /></br>
		<input type="text" name="prenom" placeholder="Prenom" /></br>
		<input type="text" name="mail" placeholder="Email" /></br>
		<input type="text" name="nationalite" placeholder="Nationalité" /></br>
		<label for="genre">Choissisez votre genre</label><br />
		<SELECT name="genre">
			<option value='m'>masculin</option>
			<option value='f'>feminin</option>
			<option value='autre'>autre</option>
		</SELECT></br>
		<!-- <input type="file" name="photo" placeholder="photo" /></br> -->
		<label for="photo">Photo</label><br>
	  <input type="file" id="photo" name="photo"><br>
		<input type="submit" value="Modifier votre profil" />

		<!-- A insérer sur la page modifier profil
		<button type="submit"><a  href="<?= $this->url('membre_supprimer') ?>">Supprimer le compte</a></button> -->
	</form> 
<?php $this->stop('main_content') ?>