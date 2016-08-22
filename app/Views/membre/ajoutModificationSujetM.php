	<?php $this->layout('layout', ['title' => 'Ajout ou modification de Sujet']) ?>

	<?php $this->start('header') ?>
	
	<?php $this->stop('header') ?>


	<?php $this->start('main_content');
	?>

	<main class="container">
		<table>
			<thead>
				<tr>
					<th>Nom</th>
					<th>Description</th>
					<th>Photo</th>
					<th>Action</th>
					<th>Rendez-vous</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($tousSujets as $key1 =>$s_array) {
						echo '<tr>
								<td>' . $s_array->getNomSujet() . '</td>' . 
								'<td>' . $s_array->getDescriptionSujet() . '</td>' . 
								'<td><img width="150px" src="' . $s_array->getSujetPhoto() . '"></td>' .
								'<td><a href="' . $this->url("gestion_sujet_modif", ["slug" => "modification", "id" => $s_array->getIdSujet()]) . '">Modifier</a><br>
								<a href="' . $this->url("gestion_sujet_suppr", ["slug" => "suppression", "id" => $s_array->getIdSujet()]) . '" >Supprimer</a><br>
								<a href="#" >Ajouter un rendez-vous</a></td>
							</tr>';
					}
				?>
			</tbody>
		</table>
		<?php
			// echo $id;
			// echo $slug;

			// echo $s_array->getNomSujet();
			echo '<pre>';
			print_r($modification);
			echo '</pre>';
		?>

		<fieldset class="form">

			<legend>Ajout/modification de Sujet</legend>

			<form method="POST" action="<?php echo $this->url("gestion_sujet"); ?>" enctype="multipart/form-data">			

				<label for="titre">Titre du sujet</label>
				<input type="text" id="titreId" name="titre" value="<?php if ($slug == "modification"){ echo $modification['nom_sujet'];} ?>">

				<label for="description">Description</label>
				<textarea name="description"><?php if ($slug == "modification"){ echo $modification['description_sujet'];} ?></textarea>

				<label for="photo">Photo</label>
				<input type="file" id="photo" name="photo">
				<!-- MOdif photo -->
				<?php 
						if ($slug == "modification") {
							echo 'Vous pouvez uploader une nouvelle photo <br>';
							echo '<img src="'. $modification['photo_sujet'] .'" width="80"><br>';	// affiche la photo actuelle
						}
				?>

				<input type="submit" value="Ajouter/modifier un sujet" class="btn">
				<!-- JQUERY EST MON AMI (à faire) -->
				<input type="submit" value="Vider les champs" class="btn">

			</form>
		</fieldset>
	</main>
	
	<?php $this->stop('main_content') ?>

	<?php $this->start('footer') ?>

	<?php $this->stop('footer') ?>