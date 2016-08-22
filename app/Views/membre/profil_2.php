<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content'); ?>

<div style="margin: auto; width: 100%; height: 600px; padding-top: 100px; margin-bottom: 10px; background-color :#2f2e3d">
    <ul class="menu_links" style="margin-bottom: 30px;"> 
      <li><a href="#info">Informations</a></li>
      <li><a href="#event">Evénement</a></li>
      <li><a href="#discussion">Discussions</a></li>

      </ul>
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

   <div id="container_profil_public" style= "width:800px; margin:auto;">

        <div id="info" style="background-color: #eee; height: 300px; width: 100%; float: left; margin-bottom: 10px; padding-left: 10px;">
        <p>Organisateur/trice</p>

            <div style=" float: left; width: 40%; margin: 5px 10px 5px 5px;">
              <img id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto()); ?>" width=200px class="photo_profil">
            </div>

              <div style="float: left; width: 40%; margin-bottom: 10px;">
                 <p id="name"><!-- <?= $membre->getPrenom() ?> <?= $membre->getNom() ?><br> -->
              <?php 
        if(!empty($membre->getPrenom()) OR !empty($membre->getNom())){
            echo 'Nom :<br>' .
            $membre->getPrenom() . ' ' . $membre->getNom(); 
        }
    ?>

                <p>Pseudo :<?= $membre->getPseudo() ?></p>


                <p id="age">AGE: <?= $membre->getAge() ?></p><br>
                <p id="pays">PAYS: <?= $membre->getNationalite() ?></p><br>
                <p id="reseau">Vous pouvez me trouver sur :</p>
<!--                 <i class="fa fa-tag fa-2x" aria-hidden="true"></i>
 -->                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></p><br>
              </div>

              <div style="float: left; width: 100%;  text-align: center;">
                <i class="fa fa-quote-left" aria-hidden="true"></i><p id="citation" style="font-style: italic; font-size: 15px;">J'aime la richesse des traditions des differents pays européens.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
              </div>    


      </div>

    </div>

  <div id="event" style="background-color: #eee; height: 600px; width: 100%; float: left; margin-bottom: 10px; padding-left: 10px;">

 <p>Evénement : /<em>BREXIT</em></p>

        <div style=" float: left; width: 30%; margin: 2px;">
              <img id="photo" src="<?php echo $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>" width=200px class="photo_profil">
        </div>

              <div style="float: left; width: 50%; margin-bottom: 10px;">
                <p style="font-size: 10px;">
                J'organise cet événement autour du Brexit.<br>
                Le départ des anglais va changer le monde de la Bourse.</p>
                </div>

              <div style="float: left; margin: 5px;">
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #DF6C4F; font-size: 13px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Rejoindre</button></p>
                <p>16 Aug</p>
                <p style="color: #3c948b;">Nb: 1/5</p>
              </div>

              <div style="float: left; width: 28%; height: 150px; margin: 10px; text-align: center; background-color: #e1e3e4;">
              <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=90px class="photo_profil">
                <p style="font-size: 15px; margin: 15px;" id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></p>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #048B9A; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Consultez le profil</button></p>

              </div>    

              <div style="float: left; width: 28%; height: 150px; margin: 10px; text-align: center; background-color: #e1e3e4;">
              <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=90px class="photo_profil">
                <p style="font-size: 15px; margin: 15px;" id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></p>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #048B9A; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Consultez le profil</button></p>

              </div>   


              <div style="float: left; width: 28%; height: 150px; margin: 10px; text-align: center; background-color: #e1e3e4;">
              <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=90px class="photo_profil">
                <p style="font-size: 15px; margin: 15px;" id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></p>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #048B9A; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Consultez le profil</button></p>

              </div>   



              <div style="float: left; width: 28%; height: 150px; margin: 10px; text-align: center; background-color: #e1e3e4;">
              <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=90px class="photo_profil">
                <p style="font-size: 15px; margin: 15px;" id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></p>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #048B9A; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Consultez le profil</button></p>

              </div>    

              <div style="float: left; width: 28%; height: 150px; margin: 10px; text-align: center; background-color: #e1e3e4;">
              <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=90px class="photo_profil">
                <p style="font-size: 15px; margin: 15px;" id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></p>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #048B9A; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Consultez le profil</button></p>

              </div>   


              <div style="float: left; width: 28%; height: 150px; margin: 10px; text-align: center; background-color: #e1e3e4;">
              <img style="float: left;" id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=90px class="photo_profil">
                <p style="font-size: 15px; margin: 15px;" id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?></p>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p><button type="submit" style="display: inline-block; padding: 5px; background: #048B9A; font-size: 9px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Consultez le profil</button></p>

              </div> 

      </div>

<?php $this->stop('main_content'); ?>


  <?php $this->start('footer') ?>

  <?php $this->stop('footer') ?>