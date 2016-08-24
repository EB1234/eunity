<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content'); ?>



<div style="margin: auto; width: 100%; height: 600px; padding-top: 100px; margin-bottom: 10px; background-color :#2f2e3d">
    <ul class="menu_links" style="margin-bottom: 30px;"> 
      <li><a href="#info">Informations</a></li>
      <li><a href="#event">Evénement</a></li>
      <li><a href="#discussion">Discussions</a></li>

      </ul>




<div id="slide">

    <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/demos/full-width-slider.slider -->
    
    <!-- This demo works with jquery library -->


<!--   <script src="<?= $this->assetUrl('js/jquery-1.11.3.min.js'); ?>"></script>
  <script src="<?= $this->assetUrl('js/jssor.slider-21.1.5.debug.js'); ?>"></script>
  <script src="<?= $this->assetUrl('js/jssor.slider-21.1.5.min.js'); ?>"></script>
  <script src="<?= $this->assetUrl('js/jssor.slider-21.1.5.mini.js'); ?>"></script> -->

    <script type="text/javascript" src="<?= $this->assetUrl('js/jquery-1.11.3.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= $this->assetUrl('js/jssor.slider-21.1.5.mini.js'); ?>"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('public/asset/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?= $this->assetUrl('img/rectangle_small_retina(3).jpg'); ?>" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">WHAT'S NEW</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" src="<?= $this->assetUrl('img/Paris.jpg'); ?>" />
                    <img data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" src="<?= $this->assetUrl('img/dummy-640x310-1.jpg'); ?>" />
                    <img data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" src="<?= $this->assetUrl('img/sakharov.jpg'); ?>" />
                    <img data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" src="<?= $this->assetUrl('img/square_small_retina(3).jpg'); ?>" />
                    <img data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" src="<?= $this->assetUrl('img/Cop21_conference.jpg'); ?>" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="<?= $this->assetUrl('img/purple.jpg'); ?>" />
                    <!-- <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="<?= $this->assetUrl('img/Brexit.jpg'); ?>" />
                        <img data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="<?= $this->assetUrl('img/Brexit.jpg'); ?>" />
                    </div> -->
                    <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="<?= $this->assetUrl('img/warhol_bilbao.jpg'); ?>" />
                    <img data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="<?= $this->assetUrl('img/sense_of_community.jpg'); ?>" />
                </div>
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?= $this->assetUrl('img/Brexit.jpg'); ?>" />
            </div>
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="<?= $this->assetUrl('img/Electric_Car.jpg'); ?>" />
            </div>
            <a data-u="add" href="http://www.jssor.com/demos/full-width-slider.slider" style="display:none">Full Width Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>

    <!-- #endregion Jssor Slider End -->



</div>




   

   <div id="container_profil_public">

        <div id="info">
        <h2 id="MembreMaitre">Organisateur/trice</h2>

            <div id="place_photo">
              <img id="photo" src="<?php echo $this->assetUrl('/upload/'.$MembreMaitre->getPhoto()); ?>" width=200px>
            </div>

              <div id="champ_organisateur">
                 
              <div id="nom_profilpublic">
                <?php 
                if(!empty($MembreMaitre->getPrenom()) OR !empty($MembreMaitre->getNom())){
                 echo 'Nom :' .' '.
                 $MembreMaitre->getPrenom() . ' ' . $MembreMaitre->getNom(); 
              }
              ?>

              <br>
             


              <div id="genre">
              <?php
              if(!empty($MembreMaitre->getGenre())){
                  echo 'Genre :' ;
                  if($MembreMaitre->getGenre() == "m"){echo " Masculin";};
                  if($MembreMaitre->getGenre() == "f"){echo " Féminin";};
              }
              ?>
              </div>
              <br>



              <div id="pseudo">
              <?php 
              if(!empty($MembreMaitre->getPseudo())){
                 echo 'Pseudo :' .' '.
                 $MembreMaitre->getPseudo();
               }
               ?>
              <br>
              </div>

              <div>              
                <p id="age">
                      <?php
                          if($MembreMaitre->getAgePublic() == 1){
                              function age($date){
                                  return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
                              }

                              echo '<div>
                                      Age :' .' '.
                                      age($MembreMaitre->getDateNaissance()) . ' ans</div>';
                          }
                      ?>
                  </div>



              <div id="nationalite">
              <?php 
              if(!empty($MembreMaitre->getNationalite())){
                 echo 'Nationalité :' .' '.
                 $MembreMaitre->getNationalite();
               }
               ?>
              <br>
              </div>



                </p><br>



                <p id="reseau">Vous pouvez me trouver sur :</p>
<!--                 <i class="fa fa-tag fa-2x" aria-hidden="true"></i>
 -->                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                    <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></p><br>
              </div>

<!--               <div id="citation">
                <p><i class="fa fa-quote-left" aria-hidden="true"></i> J'aime la richesse des traditions des differents pays européens. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
              </div>  -->   


      </div>

    </div>

</div>


  <div id="event">

 <h2 id="MembreMaitre">Evénement :</h2>

    <p id="event_info">Ce salon aura lieu le <strong><?= $Salon->getDateRdv() ?> à <?= $Salon->getHeureRdv() ?></strong></p>
    <p id="event_info">Lieu : <strong><?= $Salon->getLieuRdv() ?></strong></p>
    <p id="event_info">Nombre d'inscrit pour le moment : <strong><?= $Salon->getNombreParticipants() ?></strong><button type="submit" id="rejoindre">Rejoindre</a></button></p>
          
          <?php foreach ($ListeDesParticipants as $Participant) : ?>

              <div id="bloc_participant">
                  
                  <img id="img_participant" src="<?php echo $this->assetUrl('/upload/'.$Participant->getPhoto()); ?>" width=90px class="photo_profil">

                <p id="detail_participant"><?= $Participant->getPseudo() ?><br>PAYS: <?= $Participant->getNationalite() ?></p>

              </div>   

          <?php endforeach; ?>


      </div>

<?php $this->stop('main_content'); ?>