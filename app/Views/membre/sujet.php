<?php $this->layout('layout', ['title' => 'Europeans']) ?>

<?php $this->start('main_content') ?>



<main class="sujet">
    <div style="margin: auto; width: 50%;">
   
        <img src="<?= $this->assetUrl('/img/'.$sujet->getSujetPhoto()); ?>"><br>
         <div><?=$sujet->getNomSujet()?><div>
        <?=$sujet->getDescriptionSujet()?>
        
    </div>

    <div style="margin: 30px 0; width: 100%; background-color: #E3E7E8; color: #919E9E; font-size: 2em; text-align: center; font-family: 'Helvetica', sans serif; text-transform: uppercase; letter-spacing: 0.1em;">
    <!--it’s a pleasure to meet you.<br>
        let’s have coffee sometime.<br> -->
        <button>comment</button><br>
        <button>meet up</button>
    </div>

		
		
<!-- <?php //print_r($ListeDeSalons); ?> -->
<h1>Liste des Salons</h1>
 <?php foreach ($ListeDeSalons as $UnSalon):?>
		<img src="<?= $this->assetUrl('/upload/'.$UnSalon->getPhoto());?>"><br>
        <?=$UnSalon->getDateRdv()?>

        <a href="<?= $this->url('salon', ['id_salon' => $UnSalon->getIdSalon()]) ?>"><?=$UnSalon->getLieuRdv()?></a>
        <?=$UnSalon->getNom()?>
         <?=$UnSalon->getOpenClose()?> 
         
				
			<?php endforeach; ?>

<h1>Liste des Commentaires</h1>

            <?php

            foreach ($affichageCommentaire as $key => $value) {
                echo '
                    <div class="membre meetup">
                        <img src="'.$this->assetUrl('/upload/'.$value->getPhoto()).'">
                        <div class="comments">
                            <em>' . $value->getPseudo() . '</em><br>
                           ' . $value->getCommentaireSujet() . '
                        </div>
                        <div class="float_right">';
                if(($value->getAgePost()) == "NEW"){echo '<em style="display: inline-block; height: 17px; padding: 0 5px; background: #DF6C4F; font-size: 13px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">New</em>';};
                echo '<p>' . $value->getDateCommentaire() . '
                        </div>
                    </div>';
            }

            ?>

</main>

<?php $this->stop('main_content') ?>