<?php $this->layout('layout', ['title' => 'Europeans']) ?>

<?php $this->start('main_content') ?>

<main class="sujet">
    <div id="theme_sujet">
   
        <?php echo '<img src="\USER\convenio-cafe\public\assets\upload\sujet\/' . $affichage['photo_sujet'] . '">' ?><br>
        <div>
            <?php 
                echo $affichage['nom_sujet'] . '</div>';
                echo $affichage['description_sujet'];
            ?>
    </div>

    <div id="bandeau">
        <button>comment</button><br>
        <a href="#" id="meetUpBtn">MeetUp</a>
    </div>
  
    <article class="tabs">

        <section id="tab1">
            <h2><a href="#tab1">Comments</a></h2>

            <?php

            foreach ($affichageCommentaire as $key => $value) {
                echo '
                    <div class="membre meetup">
                        <img src="\USER\convenio-cafe\public\assets\upload\/' . $value->getPhoto() . '">
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

        </section>
        <section id="tab2">
            <h2><a href="#tab2">Salons</a></h2>
            <div class="membre meetup">
                <img src="<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>">
                <em>Bruno</em><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ab nihil laudantium doloribus est, accusamus quam error. Atque provident adipisci consequatur voluptas ipsum aut, porro soluta deleniti ipsa debitis mollitia!<br>
                <button>Voir</button>
            </div>
        </section>

    </article>

</main>

<?php $this->stop('main_content') ?>