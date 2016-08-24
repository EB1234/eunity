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

</main>


<?php $this->stop('main_content') ?>