<?php $this->layout('layout', ['title' => 'Eunity']) ?>

<?php $this->start('main_content') ?>

<main class="home">
	<div class="home">
		<div class="triangle-top"></div>
			<div class="bloc_titre"><h1><span>EU</span>nity</h1></div>
			<input class="barreRecherche" type="search" placeholder="Search a topic" autofocus>
		<div class="triangle-bottom"></div>
	</div>

	<h2>Share opinions between Europeans citizens.</h2>
	<h3>Step one - Choose a topic - Step two - Create an event - Step three - Meet up !</h3>

		<div class="row">
		<select class="sort-options filtre">
			<option value="">Trier par :</option>
			<option value="title">Titre</option>
			<option value="date-created">Date</option>
		</select>

		<a id="mosaic"></a>
		<h4 class="filter-options categories">Catégories :<br>
			<?php foreach ($ListeDeMesCI as $CI) : ?>
				<a class="lienCategorie" href="<?= $this->url('categorie', ['id_centre_interet' => $CI['id_centre_interet'] ]) ?>#mosaic"><?= $CI['nom_ci']; ?></a>
			<?php endforeach; ?>
		</h4>
	</div>

	<div id="grid" class="row">
		<?php
			$i = 0;
			$j = 0;
			$nb  = count($ListeDeSujets);
			while ($j < $nb) {
		?>

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

		<?php for($i = 0; $i < 3; $i++) { ?>

		<?php  if($i < $nb) { 
			$UnSujet = $ListeDeSujets[$j];
		?>

		<?php if($i != $rand) { ?>

			<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;<?php echo $UnSujet->getCentreInteret(); ?>&quot;]" data-date-created="2010-09-14" data-title="Baseball";>
				<div class="picture-item__inner">
					<div class="aspect aspect--16x9">
						<div class="aspect__inner">
							<img src="<?php echo $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="" height="145" width="230">
							<img class="picture-item__blur" src="<?= $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="<?=$UnSujet->getNomSujet();?>" height="145" width="230">
						</div>
					</div>

					<div class="picture-item__details clearfix">
						<figcaption class="picture-item__title pull-left">
							<a href="<?= $this->url('sujet', ['id_sujet' => $UnSujet->getId()]) ?>"><?=$UnSujet->getNomSujet();?></a>
						</figcaption>
						<p class="picture-item__tags pull-right hidden@xs"> <?=$UnSujet->getCentreInteret();?></p>
					</div>
				</div> <!-- Fin picture-item__inner -->
			</figure>

			<?php // FIN PASSAGE AFFICHAGE DE LA GRANDE IMAGE
				} else { ?>
					<figure class="col-3@xs col-8@sm col-3@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;<?php echo $UnSujet->getCentreInteret(); ?>&quot;]" data-date-created="2011-08-14" data-title="Tennis";>
						<div class="picture-item__inner">
							<div class="aspect aspect--16x9">
								<div class="aspect__inner">
									<img src="<?php echo $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="<?=$UnSujet->getNomSujet();?>" height="145" width="230">
									<img class="picture-item__blur" src="<?php echo $this->assetUrl('img/'.$UnSujet->getSujetPhoto()); ?>" alt="" height="145" width="230">
								</div>
							</div>
						
							<div class="picture-item__details clearfix">
								<figcaption class="picture-item__title pull-left">
									<a href="<?= $this->url('sujet', ['id_sujet' => $UnSujet->getId()]) ?>"><?= $UnSujet->getNomSujet();?></a>
								</figcaption>
								<p class="picture-item__tags pull-right hidden@xs"><?=$UnSujet->getCentreInteret();?></p>
							</div>
						</div>
					</figure>

			<?php } // FIN DU ELSE ?>
			<?php } ?>

			<?php $j++; } // FIN FOR ?>		

			<?php } //FIN WHILE ?>

	</div> <!-- Fin DIV grid -->

	<div class="triangle-bottom-blanc"></div>
</main>

<?php $this->stop('main_content') ?>