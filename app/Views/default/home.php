<?php $this->layout('layout', ['title' => 'Europeans']) ?>

<?php $this->start('main_content') ?>

<?php print_r($loggedUser); ?>

<div class="home">
	<div class="triangle-top"></div>
		<p style="opacity: 1; line-height: 3em; text-transform: lowercase; letter-spacing: -.06em; font-size: 136px;">welov/eu</p>
	<div class="triangle-bottom"></div>
</div>

	<main>
	
	<input class="barreRecherche" type="search" placeholder="Rechercher">

	<div class="row">
		<div class="filter-options">
			<button data-group="Ecology"><a href="#mosaic">Ecology</a></button>
			<button data-group="Politic"><a href="#mosaic">Politic</a></button>
			<button data-group="Religion"><a href="#mosaic">Religion</a></button>
			<button data-group="NewTech"><a href="#mosaic">New Technologies</a></button>
			<button data-group="Health"><a href="#mosaic">Health</a></button>
			<button data-group="Culture"><a href="#mosaic">Culture</a></button>

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

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Religion&quot;]" data-date-created="2010-09-14" data-title="Baseball" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; transition: transform 250ms ease, opacity 250ms ease; opacity: 1; transform: translate(0px, 0px) scale(1);">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>

								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Secularism in Europe</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">Religion</p>
								</div>
					</div>
				</figure>




				<!-- 1ere ligne, 2eme photo -->

				<figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;Politic&quot;]" data-date-created="2011-08-14" data-title="Tennis" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(300px, 0px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/sakharov.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/sakharov.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
					
							<div class="picture-item__details clearfix">
								<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Human rights in 2016</a></figcaption>
									<p class="picture-item__tags pull-right hidden@xs">Politic</p>
							</div>

					</div>
				</figure>





				<!-- 1ere ligne, 3eme photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Politic&quot;]" data-date-created="2009-05-27" data-title="iMac" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(900px, 0px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Brexit.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Brexit.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Brexit</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">Politic</p>
								</div>

					</div>
				</figure>




				<!-- 2eme ligne, 1ere photo -->

				<figure class="col-6@xs col-4@sm col-3@md picture-item picture-item--h2 shuffle-item shuffle-item--visible" data-groups="[&quot;Ecology&quot;]" data-date-created="2012-05-14" data-title="Master Chief" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 244px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Pollution.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Pollution.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>

							<div class="picture-item__details clearfix">
								<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Urban Air Pollution</a></figcaption>
									<p class="picture-item__tags pull-right hidden@xs">Ecology</p>
							</div>
								<p class="picture-item__description">Urban air pollution has emerged as a major health, economic and social threat, since cities expand at unprecedented rates across the world. In 1950, one-third of the world’s population lived in cities – today this has risen to one-half, and will reach two-thirds by 2050.</p>
					</div>
				</figure>




				<!-- 2eme ligne, 2eme photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Ecology&quot;]" data-date-created="2009-09-14" data-title="Eightfold" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(300px, 244px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/yoko_ono_mac_lyon.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/yoko_ono_mac_lyon.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Expo Yoko Ono</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">Culture</p>
								</div>

					</div>
				</figure>







				<!-- 2eme ligne, 3eme photo -->

				<figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;NewTech&quot;]" data-date-created="2012-03-14" data-title="Pumpkin" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(600px, 244px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/robotic_hand.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/robotic_hand.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Robotic hand</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">NewTech</p>
								</div>

					</div>
				</figure>





				<!-- 3eme ligne, 1ere photo -->

				<figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;Politic&quot;]" data-date-created="2011-08-14" data-title="Tennis" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(300px, 0px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/sense_of_community.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/sense_of_community.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
					
							<div class="picture-item__details clearfix">
								<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Sense of community</a></figcaption>
									<p class="picture-item__tags pull-right hidden@xs">Health</p>
							</div>

					</div>
				</figure>




				<!-- 3eme ligne, 2eme photo -->

				<figure class="col-6@xs col-4@sm col-3@md picture-item picture-item--h2 shuffle-item shuffle-item--visible" data-groups="[&quot;Health&quot;]" data-date-created="2013-02-01" data-title="Newegg" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(900px, 488px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/healthcare.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/healthcare.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Models of healthcare</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">Health</p>
								</div>
										<p class="picture-item__description">European healthcare systems are in urgent need of reform. Converging pressures of an ageing population, the growing burden of chronic diseases, shortages of healthcare workers and increased demand for care are significant challenges for healthcare systems.</p>
				</div>
				</figure>






				<!-- 3eme ligne, 3eme photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Health&quot;]" data-date-created="2000-01-01" data-title="Arc" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 732px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Livewell.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Livewell.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
									<div class="picture-item__details clearfix">
										<figcaption class="picture-item__title pull-left"><a href="" target="_blank">LiveWell for LIFElll</a></figcaption>
											<p class="picture-item__tags pull-right hidden@xs">Health</p>
									</div>

					/div>
				</figure>








				<!-- 4eme ligne, 1ere photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Politic&quot;]" data-date-created="2012-07-04" data-title="Ground" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 976px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Helsinki_welfare_state.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Helsinki_welfare_state.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
									<div class="picture-item__details clearfix">
										<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Helsinki welfare state</a></figcaption>
											<p class="picture-item__tags pull-right hidden@xs">Politic</p>
									</div>

					</div>
				</figure>









				<!-- 4eme ligne, 2eme photo -->

				<figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;Ecology&quot;,&quot;Politic&quot;]" data-date-created="2011-08-12" data-title="Grass" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(300px, 976px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Cop21_conference.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Cop21_conference.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
									<div class="picture-item__details clearfix">
										<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Cop 21 conference</a></figcaption>
											<p class="picture-item__tags pull-right hidden@xs">Ecology, Politic</p>
									</div>
					</div>
				</figure>








				<!-- 4eme ligne, 3eme photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Religion&quot;]" data-date-created="2013-05-19" data-title="Vestride" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(900px, 976px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Quran.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Quran.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
									<div class="picture-item__details clearfix">
										<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Better understanding of the Coran</a></figcaption>
											<p class="picture-item__tags pull-right hidden@xs">Religion</p>
									</div>
					</div>
				</figure>






				<!-- 5eme ligne, 1ere photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Religion&quot;]" data-date-created="2013-05-19" data-title="Vestride" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(900px, 976px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/warhol_bilbao.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/warhol_bilbao.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
									<div class="picture-item__details clearfix">
										<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Expo Andy Warhol</a></figcaption>
											<p class="picture-item__tags pull-right hidden@xs">Culture</p>
									</div>
					</div>
				</figure>



				<!-- 5eme ligne, 2eme photo -->

				<figure class="col-3@xs col-4@sm col-3@md picture-item shuffle-item shuffle-item--visible" data-groups="[&quot;Ecology&quot;]" data-date-created="2009-09-14" data-title="Eightfold" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(300px, 244px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/Electric_Car.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/Electric_Car.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">Electric Car</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">Ecology</p>
								</div>

					</div>
				</figure>







				<!-- 5eme ligne, 3eme photo -->

				<figure class="col-3@xs col-8@sm col-6@md picture-item picture-item--overlay shuffle-item shuffle-item--visible" data-groups="[&quot;NewTech&quot;]" data-date-created="2012-03-14" data-title="Pumpkin" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(600px, 244px) scale(1); transition: transform 250ms ease, opacity 250ms ease;">
					<div class="picture-item__inner">
						<div class="aspect aspect--16x9">
							<div class="aspect__inner">
								<img src="<?= $this->assetUrl('img/biennale_venise.jpg'); ?>" alt="" height="145" width="230">
								<img class="picture-item__blur" src="<?= $this->assetUrl('img/biennale_venise.jpg'); ?>" alt="" height="145" width="230">
							</div>
						</div>
								<div class="picture-item__details clearfix">
									<figcaption class="picture-item__title pull-left"><a href="" target="_blank">15eme Biennale de Venise</a></figcaption>
										<p class="picture-item__tags pull-right hidden@xs">Culture</p>
								</div>

					</div>
				</figure>











	</div> <!-- Fin DIV grid -->





	<div class="triangle-bottom-blanc"></div>
	</main>

<?php $this->stop('main_content') ?>