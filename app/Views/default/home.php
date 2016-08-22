<?php $this->layout('layout', ['title' => 'Europeans']) ?>

<?php $this->start('main_content') ?>



<div class="home">
	<div class="triangle-top"></div>
		<p style="opacity: 1; line-height: 3em; text-transform: lowercase; letter-spacing: -.06em; font-size: 136px;">welov/eu</p>
	<div class="triangle-bottom"></div>
</div>

	<main>
	
	<input class="barreRecherche" type="search" placeholder="Rechercher">

	<div class="row">
		<div class="filter-options">
			<?php foreach ($ListeDeMesCI as $CI) : ?>

				<a class="lienCategorie" href="<?= $this->url('categorie', ['id_centre_interet' => $CI['id_centre_interet'] ]) ?>"><?= $CI['nom_ci']; ?></a>

			<?php endforeach; ?>
		</div>

		<p>Trier par:</p>
		<select class="sort-options">
			<option value="">Defaut</option>
			<option value="title">Titre</option>
			<option value="date-created">Date</option>
		</select>
	</div>




	<a id="mosaic"></a>
	<div id="grid" class="row" style="height: 1220px; transition: height 250ms ease;">
	
			<!-- 1ere ligne, 1ere photo -->
			<?php 
				
				$i = 0;
				$j = 0;
				$nb  = count($ListeDeSujets);

				while ($j < $nb) { ?>

					<?php 
						// -- Génération d'une position aléatoire
						if(!isset($precrand)) {
							$rand = rand(1, 2);
							$precrand = $rand;
						} else {
							$rand = rand(0, 2);
							while ($rand == $precrand) {
								$rand = rand(0, 2);
							}
							$precrand = $rand;
						}						 

					?>
					<?php for ($i = 0; $i < 3; $i++) { ?>

						<?php $UnSujet = $ListeDeSujets[$j]; ?>

							<?php if($i != $rand) { ?>

								<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;<?php echo $UnSujet->getCentreInteret(); ?>&quot;]" data-date-created="2010-09-14" data-title="Baseball" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; transition: transform 250ms ease, opacity 250ms ease; opacity: 1; transform: translate(0px, 0px) scale(1);">
									<div class="picture-item__inner">
										<div class="aspect aspect--16x9">
											<div class="aspect__inner">
												<img src="<?php echo $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="" height="145" width="230">
												<img class="picture-item__blur" src="<?= $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="" height="145" width="230">
											</div>
										</div>

										<div class="picture-item__details clearfix">

											<figcaption class="picture-item__title pull-left"><a href="<?= $this->url('sujet', ['id_sujet' => $UnSujet->getId()]) ?>"><?=$UnSujet->getNomSujet();?></a></figcaption>
												<p class="picture-item__tags pull-right hidden@xs"> <?=$UnSujet->getCentreInteret();?></p>

										</div>
									</div>
								</figure>

							<?php } // FIN PASSAGE AFFICHAGE DE LA GRANDE IMAGE
							else { ?>

								<figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;<?php echo $UnSujet->getCentreInteret(); ?>&quot;]" data-date-created="2011-08-14" data-title="Tennis" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(300px, 0px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
									<div class="picture-item__inner">
										<div class="aspect aspect--16x9">
											<div class="aspect__inner">
												<img src="<?php echo $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="" height="145" width="230">
												<img class="picture-item__blur" src="<?php echo $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="" height="145" width="230">
											</div>
										</div>
									
											<div class="picture-item__details clearfix">
												<figcaption class="picture-item__title pull-left"><a href="<?= $this->url('sujet', ['id_sujet' => $UnSujet->getId()]) ?>"><?=$UnSujet->getNomSujet();?></a></figcaption>
													<p class="picture-item__tags pull-right hidden@xs"><?=$UnSujet->getCentreInteret();?></p>
											</div>

									</div>
								</figure>

							<?php } // FIN DU ELSE ?>

					<?php $j++; } // FIN FOR ?>		

				<?php } //FIN WHILE ?>



	</div> <!-- Fin DIV grid -->

	<div class="triangle-bottom-blanc"></div>
	</main>

<?php $this->stop('main_content') ?>