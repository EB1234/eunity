<?php $this->layout('layout', ['title' => 'CGU']) ?>

<?php $this->start('main_content') ?>





<main class="sujet-contact">
   	<!-- <h3>Nous joindre</h3>  -->
   		<div class="art1">

			<article>
				    
					<p>
					Adresse												
					Commission Nationale de l'Informatique et des Libertés
					8, rue Vivienne
					CS 30223
					75083 Paris cedex 02
					Web
					<a href="#" target="_blank">www.europe-cafe.eu</a>
					Téléphone
					<a href="tel://0153732222">01 23 45 67 89</a>
					Fax
					01 98 76 54 32
					</p>

				
			</article>		
	
		</div>
			

    	<div class="container-contact">

			<h2>Contactez-nous.</h2>
				
					<form id="formContactId" name="formContact" class="formulaire-contact" method="POST" action="<?php echo $this->url('contact'); ?>">
						<h5>Si vous n'y trouvez pas votre solution, contactez-nous en utilisant le formulaire ci-dessous. </h5>
																
						<label for="nom">Nom</label>
						<input type="text" id="nomId" name="nom" placeholder="Nom" pattern="^[a-zA-Z_]{4,16}$" required>				
						<span class="msg-error">Veuillez renseigner vos identifiants de connexion</span>
						
						<label for="nom">Prénom</label>
						<input type="text" id="prenomId" name="prenom" placeholder="Prénom" pattern="^[a-zA-Z_]{4,16}$" required>				
						<span class="msg-error">Veuillez renseigner vos identifiants de connexion</span>

						<label for="mail">email</label>
						<input type="email" id="mailId" name="mail" placeholder="adresse@mail.fr" required>
						<span class="msg-error">Veuillez vérifier le format de votre email</span>
													
						<label for="telephone">Téléphone</label>
						<input type="texte" id="mdpId" name="mdp" placeholder="Téléphone" pattern="^[0-9]{4,16}$">
						<span class="msg-error">Veuillez renseigner votre mot de passe</span>

						<label for="mdp">Pays</label>
						<input type="texte" id="mdpBisId" name="mdpBis" placeholder="Pays" pattern="^[a-zA-Z]{4,16}$">
						<span class="msg-error">Veuillez confirmer votre mot de passe</span>
					
						
						<input type="submit" value="Inscription" class="btn">	
					</form>	

		</div>


	
</main>

<?php $this->stop('main_content') ?>