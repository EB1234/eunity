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

 <?php foreach ($ListeDeSalons as $UnSalon):?>
		<img src="<?= $this->assetUrl('/upload/'.$UnSalon->getPhoto());?>"><br>
        <?=$UnSalon->getDateRdv()?>

        <a href="<?= $this->url('salon', ['id_salon' => $UnSalon->getIdSalon()]) ?>"><?=$UnSalon->getLieuRdv()?></a>
        <?=$UnSalon->getNom()?>
         <?=$UnSalon->getOpenClose()?> 
         
				
			<?php endforeach; ?>

<!--     <div class="home_sujet">
    <div class="triangle-top"></div>
    <div class="triangle-bottom"></div>
</div> -->
    <input class="barreRecherche" type="search" placeholder="Rechercher">

    <div class="row">
        <p>Trier par:</p>
        <select class="sort-options">
            <option value="">Defaut</option>
            <option value="title">Pseudo</option>
            <option value="date-created">Date</option>
        </select>
    </div>

    <div id="grid" class="row" style="max-width: 80%;">

   <figure class="picture-item" style="background-color: #e1e3e4; width: 100%; height: 150px; padding: 30px; " data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-16" data-title="blabla">
        <div style="width: 20%; height: 100%; margin-right: 30px; float: left; background-image: url(<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>">
        </div>
        <figcaption class="picture-item__title">
            <div style="width: 60%; float: left;">
                <em>Martin</em><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div style="float: right;">
                <em style="display: inline-block; height: 17px; padding: 0 5px; background: #DF6C4F; font-size: 13px; font-style: normal; color: #FFF; line-height: 18px; border-radius: 2px;">New</em>
                <p>16 Aug</p><p style="color: #3c948b; text-transform: uppercase;">online</p>
            </div>     
        </figcaption>
    </figure>

    <figure class="picture-item" style="background-color: #e1e3e4; width: 100%; height: 150px; padding: 30px; " data-groups="[&quot;Religion&quot;]" data-date-created="2016-08-12" data-title="blabla">
        <div style="width: 20%; height: 100%; margin-right: 30px; float: left; background-image: url(<?= $this->assetUrl('img/is_secularism_under_threat_in_Europe.jpg'); ?>">
        </div>
        <figcaption class="picture-item__title">
            <div style="width: 60%; float: left;">
                <em>Bruno</em><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div style="float: right;">
                
                <p>12 Aug</p><p style="color: #3c948b; text-transform: uppercase; color: #DF6C4F;">offline</p>
            </div>     
        </figcaption>
    </figure>

    </div> <!-- Fin DIV grid -->
</main>

<?php $this->stop('main_content') ?>