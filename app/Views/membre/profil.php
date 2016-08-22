<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
<!-- 
<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css') ?>">


<!-- Fond d'écran -->
  <div style="background-image: url(<?php echo $this->assetUrl('img/prism.jpg'); ?>); background-repeat: no-repeat; background-size: cover;">

    <!-- Style à ajouter au layout -->
    <div style="margin: auto; width: 80%; height: 800px; padding-top: 150px;">

        <div style="background-color: #ddd; height: 100%; padding: 10px;">
            <div style="background-color: #f9f9f9; width: 30%; height: 100%; float: left; padding: 10px; margin: 5px 10px 5px 5px;">
                <div style="text-align: center;">
                    <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto()); ?>" width=100px class="photo_profil"><br><br><h2><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></h2>
                </div>

                        <div style="clear: both;">
                                <i class ="fa fa-user fa-3x" aria-hidden="true"></i>

                                    <p id="pseudo">@CHOUCHOU</p>
                                    <p id="age">AGE: <?= $membre->getAge(1) ?></p>
                                    <p id="sexe">SEXE: <?= $membre->getGenre(1) ?></p>
                                    <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p>
                                    <p id="contact"><?= $membre->getMail(1) ?></p><br>
                                    <p id="citation">J'aime l'europe et suis intéressé par les traditions des differents pays.</p><br>
                                    <p id="reseau">Mes reseaux sociaux<br>
                                            <i class="fa fa-tag fa-2x" aria-hidden="true"></i>
                                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                                            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></p>
                        
                                    <button type="submit"><a  href="<?= $this->url('membre_supprimer') ?>">Supprimer le compte</a></button>
                        </div>
            </div>







            <!-- TODO : Bouton catégories à gauche de "Mes favoris" -->
            <div style="background-color: #f9f9f9; display: inline-block; width: 60%; height: 50%; padding: 20px 20px; margin: 5px; text-align: right;">

<!--                 <a class="package-link" href="http://www.visitstockholm.com/en/See--do/Guides/Stockholm-top-10/" title="Things to do in Stockholm - Top 10">
 -->
                            <h3>What's new ?</h3>
                                <div id="image_news">
                                    <img src="../public/assets/img/biennale_venise.jpg" width= 50% height=50% style="float: left;margin-top:5px;"></div>
                                        <textarea placeholder="you participate..."></textarea><br>
                                            <button style="background-color: #16a085;" type="submit"><a href="<?= $this->url('membre_modifier') ?>">Modifier</a></button>
                                </div>





            <div style="background-color: #f9f9f9; display: inline-block; width: 60%; height: 50%; padding: 20px 20px; margin: 5px; text-align: right;">

<!--                 <a class="package-link" href="http://www.visitstockholm.com/en/See--do/Guides/Stockholm-top-10/" title="Things to do in Stockholm - Top 10">
 -->
                            

                    <div style="background-color: #f9f9f9; display: inline-block; width: 50%; height: 50%; padding: 20px 20px; margin: 5px; float: left;">

                            <h3>Mes sujets</h3>
                                <div id="image_news">
                                    <img src="../public/assets/img/Paris.jpg" width= 50% height=50% style="float: left;margin-top:5px;"></div>
                                        
                                            <button style="background-color: #16a085;" type="submit"><a href="<?= $this->url('membre_modifier') ?>">Modifier</a></button>
                                </div>
        

                    <div style="background-color: #f9f9f9; display: inline-block; width: 50%; height: 50%; padding: 20px 20px; margin: 5px; float: right;">

                            <h3>Mes sujets</h3>
                                <div id="image_news">
                                    <img src="../public/assets/img/Paris.jpg" width= 50% height=50% style="float: left;margin-top:5px;"></div>
                                        
                                            <button style="background-color: #16a085;" type="submit"><a href="<?= $this->url('membre_modifier') ?>">Modifier</a></button>
                                </div>


        </div>
    </div>
  </div>

<?php $this->stop('main_content') ?>