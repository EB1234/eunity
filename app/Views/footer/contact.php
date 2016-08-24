<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<main class="sujet">
	<div class="contact">

    	<div class="container-contact">

			<h3>Contactez-nous.</h3>
	

					
					<form id="formContactId" name="formContact" class="formulaire-contact" method="POST">
						<h5>Si vous n'y trouvez pas votre solution, contactez-nous en utilisant le formulaire ci-dessous. </h5>
														
						<label for="nom">Nom</label>
						<input type="text" id="nomId" name="nom" placeholder="Nom" pattern="^[a-zA-Z_]{4,16}$" >				
						<span class="msg-error">Veuillez renseigner votre nom</span>
						
						<label for="prenom">Prénom</label>
						<input type="text" id="prenomId" name="prenom" placeholder="Prénom" pattern="^[a-zA-Z_]{4,16}$" >				
						<span class="msg-error">Veuillez renseigner votre prénom</span>

						<label for="mail">email</label>
						<input type="email" id="mailId" name="mail" placeholder="adresse@mail.fr" >
						<span class="msg-error">Veuillez renseigner votre email</span>
													
						<label for="telephone">Téléphone</label>
						<input type="texte" id="telephoneId" name="telephone" placeholder="0601020304" pattern="^06[0-9]{8}$">
						<span class="msg-error">Veuillez renseigner votre téléphone</span>

						<label for="pays">Pays</label>
						<input type="texte" id="paysId" name="pays" placeholder="Pays" pattern="^[a-zA-Z]{4,16}$">
						<span class="msg-error">Veuillez renseigner votre pays</span>
							

						 <label for="commentaire">Commentaire</label>
						<textarea id="commentaireId" name="commentaire" cols="60" rows="4" placeholder="Votre message" minlength="60" maxlength="160"></textarea>
										
						<input type="submit" value="Envoyer" class="btn">
					</form>
		<?php 
						if(!empty($messageErreur)) :
							echo $messageErreur;
						endif;
						?>
		</div>

		<div class="container-contact2">
			<h3>Nous joindre</h3> 
			 <div class="art1">
				<article>					
						
						<h4>Adresse</h4>					
						<p>Europe Café. 
						<br>18, rue Geoffroy l'Asnier.
						75004 Paris cedex 04.<br>
						<a href="#" target="_blank">http://www.europe-cafe.eu</a><br>
						Téléphone : <a href="tel://0153732222">01 23 45 67 89</a><br>
						Fax : 01 98 76 54 32<br>
						</p>
										
				</article>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10500.842031392607!2d2.3486743032998385!3d48.85419610885476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fd10fa77a9%3A0xbefa2358f9e7a776!2s18+Rue+Geoffroy+l&#39;Asnier%2C+75004+Paris!5e0!3m2!1sfr!2sfr!4v1471510520897" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>


</main>

<?php $this->stop('main_content') ?>