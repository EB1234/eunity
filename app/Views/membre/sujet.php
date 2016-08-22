	<?php $this->layout('layout', ['title' => 'Ajout ou modification de Sujet']) ?>

<?php $this->start('main_content') ?>





<main class="sujet">
    <div class="cgu">
	
       <img src="<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>">
        <p>Secularism is one of the bedrocks of European liberal democracy. Across the continent, 
		people take it for granted that governments are separated from religious institutions. 
		Even in states that maintain an official established religion (such as England or Malta) 
		secularism is essentially followed in practice.
        But is all that changing? Is secularism now under threat in parts of Europe? We had a comment 
		sent in from Jon on our ‘Suggest a Debate’ page, arguing that immigration is fundamentally changing 
		European society, and is putting secularism under threat.	
        According to a 2012 Eurobarometer survey, 72% of people living in the EU define themselves as Christian, 
		whereas only 23% think of themselves as atheist or agnostic (and 2% define themselves as Muslim, whilst 
		less than 1% call themselves Buddhist, Sikh, Hindu, or Jewish). It’s true that religious minorities are 
		often concentrated in urban areas, and they seem to receive a disproportionate amount of (often negative) 
		attention via the media. But it seems a stretch to argue that immigration is ‘threatening’ European secularism.
        Is secularism under threat in Europe? Or has Europe never been more secular? Are fears about the erosion 
		of secularism being overblown? Let us know your thoughts and comments in the form below, and we’ll take them to 
		policymakers and experts for their reactions!</p>


		<!-- <div style="margin: 30px 0; width: 100%; background-color: #E3E7E8; color: #919E9E; font-size: 2em; text-align: center; text-transform: uppercase; letter-spacing: 0.1em; padding:20px;">
		it’s a pleasure to meet you.<br>
			let’s have coffee sometime.<br> -->
			<button>comment</button>
			<a href="#" id="myBtn2">meetup</a>
							<!-- Modal content -->	
				<div id="myWinmodal" class="myWinmodal">
					<div class="myWinmodal-content">						
							<span class="closing">Fermer</span>
						
		
								<form id="formInscriptionId" name="formInscription" class="formulaire" method="POST" action="<?php echo $this->url('default_home'); ?>">
									<h5>Choisissez votre café de préference</h5>
																
									<label for="pseudo">pseudo</label>
									<input type="text" id="pseudoId" name="pseudo" placeholder="Votre pseudo" pattern="^[a-zA-Z0-9_]{4,16}$">				
									<span class="msg-error">Veuillez renseigner vos identifiants de connexion</span>
									
									<label for="mail">email</label>
									<input type="email" id="mailId" name="mail" placeholder="Votre adresse@mail.fr">
									<span class="msg-error">Veuillez vérifier le format de votre email</span>
													
									
												
								<input type="submit" value="Meet up" class="btn">
								</form>
			
					</div>
			
				</div>
			

			
			
			
		<!--</div>-->
		  
		<div class="gestio-com-suj">
				<section class="gestion-left">
					<article><p>Cocuo</p></article>
				</section>
				
				<section class="gestion-rigth">
					<article><p>Cocuo2</p></article>
				</section>
		</div>
	</div>

</main>

<?php $this->stop('main_content') ?>