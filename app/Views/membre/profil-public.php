<?php $this->layout('layout', ['title' => 'Profil']) ?>

<?php $this->start('main_content') ?>

<img src="<?php echo '\USER\convenio-cafe\public\assets\upload/' . $affichageProfil->getPhoto(); ?>">
<div>
    Pseudo :<br>
    <?= $affichageProfil->getPseudo() ?>
</div>
<div>
    <?php 
        if(!empty($affichageProfil->getPrenom()) OR !empty($affichageProfil->getNom())){
            echo 'Nom :<br>' .
            $affichageProfil->getPrenom() . ' ' . $affichageProfil->getNom(); 
        }
    ?>
</div>
<div>
    <?php
    if(!empty($affichageProfil->getGenre())){
        echo 'Genre :<br>';
        if($affichageProfil->getGenre() == "m"){echo "Masculin";};
        if($affichageProfil->getGenre() == "f"){echo "Féminin";};
    }
    ?>
</div>
<div>
    <?php
        if($affichageProfil->getAgePublic() == 1){
            function age($date){
                return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
            }

            echo '<div>
                    Age :<br>' .
                    age($affichageProfil->getDateNaissance()) . ' ans</div>';
        }
    ?>
</div>
<div>
    <?php
        if(!empty($affichageProfil->getNationalite())){
            echo 'Pays :<br>' . $affichageProfil->getNationalite();
        }
    ?>
</div>

<hr>

<div>
    <?php 
        echo '<img src="\USER\convenio-cafe\public\assets\upload\sujet/' . $affichageSujetProfil->getSujetPhoto() . '"><br>' . $affichageSujetProfil->getNomSujet() . '<br>' . $affichageSujetProfil->getDescriptionSujet();
    ?>
</div>

<hr><br>
<?= $affichageSalon->getLieuRdv() ?><br>
<?= $affichageSalon->getDateRdv() ?><br>
<?= $affichageSalon->getHeureRdv() ?><br>
<?= $affichageSalon->getNombreParticipants() ?><br>
<hr><br>
<?php 
echo '<pre>';
print_r($affichageParticipants);
echo '</pre>';
?><br>

<?php $this->stop('main_content') ?>