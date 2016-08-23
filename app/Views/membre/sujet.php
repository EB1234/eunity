<?php $this->layout('layout', ['title' => 'Europeans']) ?>

<?php $this->start('main_content') ?>



<main class="sujet">
    <!-- Modal content -FENETRE MODAL DE COMMENTAIRE -->
    <div id="myWinmodal" class="myWinmodal">
        <div class="myWinmodal-content">                        
         <p class="closing">Fermer</p>                                               
            <form id="formCommentsId" name="formComments" class="formulaireComments" method="POST"; ?>
                <h3>Choisissez votre café de préference</h3>                                                                       
                <label for="commentaire">Commentaire</label>
                <textarea name="commentaire" id="commentaireId" rows="5" cols="100"></textarea>
                <input type="submit" value="Meet up" class="btn">
            </form>                    
        </div>            
    </div>

<<<<<<< HEAD
    <div style="margin: 30px 0; width: 100%; background-color: #E3E7E8; color: #919E9E; font-size: 2em; text-align: center; font-family: 'Helvetica', sans serif; text-transform: uppercase; letter-spacing: 0.1em;">
    <!--it’s a pleasure to meet you.<br>
        let’s have coffee sometime.<br> -->
       <!--  <button>comment</button><br>
        <a href="#meetUp" id="meetUpBtn">MeetUp</a> -->
        <a href='#meet_up'>Meet Up</a>
        <a href="#comments">Comment</a>
       
    </div>

		
 		
<!-- <?php //print_r($ListeDeSalons); ?> -->
<article class="superpositions"
<section id="meet_up"> 
<h1>Liste des Salons</h1>
 <?php if (!null == $ListeDeSalons) {?>
 <?php foreach ($ListeDeSalons as $UnSalon):?>
   

		<img src="<?= $this->assetUrl('/upload/'.$UnSalon->getPhoto());?>"><br>
        <?=$UnSalon->getDateRdv()?>

        <a href="<?= $this->url('salon', ['id_salon' => $UnSalon->getIdSalon()]) ?>"><?=$UnSalon->getLieuRdv()?></a>
        <?=$UnSalon->getNom()?>
         <?=$UnSalon->getOpenClose()?> 
          
         
			<?php endforeach; ?>
            <?php }?>
           
        

<section id=comments>

<h1>Ecrire un Commentaire</h1>
            <form method="post">
                     <textarea name="commentaire" id="commentaire" rows="10" cols="150"></textarea></br>
                     <input type="submit" value="Envoyer" />
                </form>
                 
            <?php
                if (!null == $affichageCommentaire) {
            foreach ($affichageCommentaire as $key => $value) {
               
                echo '
                    <div class="membre meetup">
                        <img style="width:5%;" src="'.$this->assetUrl('/upload/'.$value->getPhoto()).'">
                        <div class="comments">
                            <em>' . $value->getPseudo() . '</em><br>
                           ' . $value->getCommentaireSujet() . '
                        </div>
                        <div class="float_right">';
                if(($value->getAgePost()) == "NEW"){echo '<em style="display: inline-block; height: 17px; padding: 0 5px; background: #DF6C4F; font-size: 13px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">New</em>';};
                echo '<p>' . $value->getDateCommentaire() .'
                        </div>
                    </div>';
                        
            }

                 }
=======
    <div class="container-liste">
        <div class="liste-suj-com-salon">                           
            <img src="<?= $this->assetUrl('/img/'.$sujet->getSujetPhoto()); ?>">
             <div><?=$sujet->getNomSujet()?></div>
            <?=$sujet->getDescriptionSujet()?>        
        </div>

        <div class="liste-com-suj">
            <div class="liste-com">           
                <button id="myBtnLogin"> <?php if(null ==$w_user) : ?>
                    <p class="msg-error">
                        <a href="#">Connectez-vous ou créez un Compte</a> 
                        <br>pour ajouter un commentaire ou participer à un salon !
                    </p>
                </button>
                <?php else : ?>
                <button id="myBtn2">comment</button>
                <button>meet up</button>

                <?php endif; ?>                                         
        </div>  



		   <section class="liste-left">
                <h3>Liste des Commentaires</h3>
>>>>>>> origin/Sujet

            <?php
                foreach ($affichageCommentaire as $key => $value) {
                
                echo '<div class="membre-comments">
                        <img src="'.$this->assetUrl('/upload/'.$value->getPhoto()).'">
                        <div class="comments-txt">
                            <h5>' . $value->getPseudo() . '</h5>
                            <p>' . $value->getCommentaireSujet() . 
                            '</p></div>
                            <div class="new-label-container">';
                if(($value->getAgePost()) == "NEW"){echo '<p class="new-label-new">New</p>';};
                echo '<p class="new-label-date">' . $value->getDateCommentaire() . '</p>
                       </div>
                    </div><hr>';
            }
            ?>
<<<<<<< HEAD
            
</article>
=======
            </section>
                
         <section class="liste-rigth">
                <h3>Liste des Salons</h3>
                    <div class="membre-comments">
                        <h5> <?php foreach ($ListeDeSalons as $UnSalon):?></h5>
                		<img src="<?= $this->assetUrl('/upload/'.$UnSalon->getPhoto());?>">
                            <div class="new-label-container-salon">
                            <p class="new-label-date"><?=$UnSalon->getDateRdv()?></p>
                            
                            <a href="<?= $this->url('salon', ['id_salon' => $UnSalon->getIdSalon()]) ?>"><?=$UnSalon->getLieuRdv()?></a>
                            </div>
                        <div class="comments-txt-salon">   
                            <?=$UnSalon->getNom()?>
                            <?=$UnSalon->getOpenClose()?> 				        			     
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                    <hr>
            </section> 
        </div> 
    </div>
>>>>>>> origin/Sujet

</main>


<?php $this->stop('main_content') ?>