<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>


<!--   <div style="background-image: url(<?php echo $this->assetUrl('img/prism.jpg'); ?>); background-repeat: no-repeat; background-size: cover;"> -->

  <div style="background-color: #2f2e3d; background-repeat: no-repeat; background-size: cover;">


  <div style="margin: auto; width: 100%; height: 550px; padding-top: 100px; margin-bottom: 10px;">



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


 
    


    <div id="info" style="background-color: #eee; height: 300px; width: 100%; float: left; margin-bottom: 10px; padding-left: 10px;">
        <p>Organisateur/trice</p>

            <div style=" float: left; width: 40%; margin: 5px 10px 5px 5px;">
              <img id="photo" src="<?php echo $this->assetUrl('/upload/'.$membre->getPhoto(1)); ?>" width=200px class="photo_profil">
            </div>

              <div style="float: left; width: 40%; margin-bottom: 10px;">
                <p id="name"><?= $membre->getPrenom() ?> <?= $membre->getNom() ?><br>
                <p>Pseudo :<?= $membre->getPseudo() ?>


                <p id="age">AGE: <?= $membre->getAge(1) ?></p><br>
                <p id="pays">PAYS: <?= $membre->getNationalite(1) ?></p><br>
                <p id="reseau">Vous pouvez me trouver sur :
<!--                 <i class="fa fa-tag fa-2x" aria-hidden="true"></i>
 -->                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></p><br>
              </div>

              <div style="float: left; width: 100%; margin-top: 25px; text-align: center;">
                <i class="fa fa-quote-left" aria-hidden="true"></i><p id="citation" style="font-style: italic; font-size: 18px;">J'aime la richesse des traditions des differents pays européens.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
              </div>    


    </div>
    


    <div id="event" style="background-color: #eee; height: 600px; width: 100%; float: left; margin-bottom: 10px; padding-left: 10px;">
            <p>Evénement</p>




<div id="grid" class="row" style="max-width: 90%;">

   <div class="picture-item" style="background-color: blue; width: 100%; height: 150px; padding: 10px; display: block-inline;" data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-16" data-title="blabla">
        <div style="width: 20%; height: 100%; margin-right: 30px; float: left; background-image: url(<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>">
        </div>
        <figcaption class="picture-item__title">
            <div style="width: 50%; float: left;">
                <em>Nathalie Dagorn</em><br>
                <p style="font-size: 10px;">
                J'organise cet événement autour du Brexit.<br>
                Le départ des anglais va changer le monde de la Bourse.</p>
            </div>
            <div style="float: right; margin: 5px;">
                <p><em style="display: inline-block; padding: 5px; background: #DF6C4F; font-size: 13px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">Rejoindre</em></p>
                <p>16 Aug</p>
                <p style="color: #3c948b;">Nb: 1/5</p>
            </div>     
        </figcaption>
    </div>

<div style="background-color: red; float: left; width: 30%;">
<figure class="picture-item" style="background-color: #e1e3e4; width: 20%; height: 150px; padding: 10px; display: block; " data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-16" data-title="blabla"></figure>

<figure class="picture-item" style="background-color: #e1e3e4; width: 20%; height: 150px; padding: 10px; display: block;" data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-16" data-title="blabla"></figure>

</div>

<div style="float: left;">
<figure class="picture-item" style="background-color: #e1e3e4; width: 20%; height: 150px; padding: 10px; display: block;" data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-16" data-title="blabla"></figure>

</div>















</div>





















    </div>
   

    <div id="discussion" style="background-color: #eee; height: 350px; width: 100%; float: left; margin-bottom: 10px; padding-left: 10px;">
            <p>Discussions</p>

            <div id="image_news">
                <img src="<?= $this->assetUrl('img/biennale_venise.jpg'); ?>" width= 20% height=20% style="float: left;margin-top:0px;"></div>
                                        
                        <div style="background-color: #e1e3e4; width: 30%; height: 280px; padding: 30px; float: left;" data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-12" data-title="blabla">

                            <div style="width: 50%; float: left;">
                                <p id="comments"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                                                     



                              <div style="float: right;">
                            
                              <p>12 Aug</p><p style="font-style: italic;">Bruno</p><p style="color: #3c948b; text-transform: uppercase; color: #DF6C4F;">offline</p>
                              </div>     
                        
                        </div>



    <div id="image_news">
                <img src="<?= $this->assetUrl('img/biennale_venise.jpg'); ?>" width= 20% height=20% style="float: left;margin-top:0px;"></div>
                                        
                        <div style="background-color: #e1e3e4; width: 30%; height: 280px; padding: 30px; float: left;" data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-12" data-title="blabla">

                            <div style="width: 50%; float: left;">
                                <p id="comments"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                                                     



                            <div style="float: right;">
                            
                                <p>12 Aug</p><p style="font-style: italic;">Bruno</p><p style="color: #3c948b; text-transform: uppercase; color: #DF6C4F;">offline</p>
                            </div>     
                          
                        </div>



    </div>


</div>
 <!-- Fin DIV container_profil -->
   



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>


<?php $this->stop('main_content') ?>