<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>
 


<!--   <div style="background-image: url(<?php echo $this->assetUrl('img/prism.jpg'); ?>); background-repeat: no-repeat; background-size: cover;"> -->

<!--   <div style="background-color: red; background-repeat: no-repeat; background-size: cover;">
 -->

  <div style="margin: auto; width: 100%; height: 600px; padding-top: 100px; margin-bottom: 10px; background-color :#2f2e3d">

                                      


<!--         <nav class="style-nav" style="margin: auto; width: 90%; height: 30px; padding-top: 5px;">
        <p>xxx</p> -->


                      <ul class="menu_links" style="margin-bottom: 30px;"> 
                      <li><a href="#info">Informations</a></li>
                      <li><a href="#event">Evénement</a></li>
                      <li><a href="#discussion">Discussions</a></li>

                      </ul>
       
        <!-- </div> -->



<!--         <div style="background-color: #eee; height: 50%; width: 100%; float:left; margin-bottom: 10px; margin-top: 10px;">
                <p>What's New ?</p> -->
                
<!--                 <img src="<?= $this->assetUrl('img/biennale_venise.jpg'); ?>" width= 30% height=30% style="float: left; margin-top:5px;"> -->


<p style="color: #fff; padding-left: 10px; text-align: center;">What's new?</p>


<span id="sl_play" class="sl_command">&nbsp;</span>
<span id="sl_pause" class="sl_command">&nbsp;</span>
<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
  

  
  
  <section id="slideshow">
  
    <a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
    <a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
    <a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
    <a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
    <a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
    <a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
                <a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
                  <a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>
    
    <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
      <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
    
    <div class="container">
      <div class="c_slider"></div>
        <div class="slider">
            <figure class="nd">
                <img src="<?= $this->assetUrl('img/biennale_venise.jpg'); ?>" alt="" width="640" height="310" />
                    <figcaption>événement incontournable : <em>la biennale de venise</em></figcaption>
            </figure>


        <!--
        --><figure class="nd">
            <img src="<?= $this->assetUrl('img/Brexit.jpg'); ?>" alt="" width="640" height="310" />
              <figcaption><em>le brexit :</em> la suite sans nos amis anglais</figcaption>
            </figure>


        <!--
        --><figure class="nd">
            <img src="<?= $this->assetUrl('img/Electric_Car.jpg'); ?>" alt="" width="640" height="310" />
              <figcaption>europe mise au<em>(vert)</em></figcaption>
           </figure><!--
        -->


        <figure class="nd">
          <img src="<?= $this->assetUrl('img/rectangle_small_retina(3).jpg'); ?>" alt="" width="640" height="310" />
            <figcaption>european way of life</figcaption>
        </figure>


      </div>
    </div>


    
    <span id="timeline"></span>
    
    <ul class="dots_commands"><!--
      --><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
      --><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
      --><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
      --><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
    </ul>
    
  </section>



   </div>


 
    <div id="Salut" style= "width:800px; margin: auto; background-color: #eee; text-align: center; padding-top: 15px;">
        <img class="polaroid" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto()); ?>">
        <p id="pseudo">
        <?= $membre->getPseudo() ?><br>
        <?= $membre->getPrenom() ?> <?= $membre->getNom() ?><br>
        ÂGE: <?= $membre->getAge() ?><br>
        SEXE: <?= $membre->getGenre() ?><br>
        PAYS: <?= $membre->getNationalite() ?><br>
        E-MAIL: <?= $membre->getMail() ?><br></p>



        <p id="citation" style="font-style: italic; font-size: 12px;">J'aime l'europe et suis intéressé par les traditions des differents pays.</p><br>
                        <p>Mes reseaux sociaux<br>
                            <i class="fa fa-tag fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                        </p>





        <p><button type="submit" style="display: inline-block; padding: 5px; background: #DF6C4F; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px; margin: 15px;"><a href="<?= $this->url('membre_modifier') ?>">Modifier</button></p>


        <p><button type="submit" style="display: inline-block; padding: 5px; background: #DF6C4F; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px; margin: 15px;"><a href="<?= $this->url('membre_supprimer') ?>">Supprimer</button></p>





    </div> <!-- Fin DIV container_profil_public -->







    </div>
  </div>

<?php $this->stop('main_content') ?>