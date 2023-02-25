<?php
$motdepasse = 'T28BY5E5';
if(isset($_POST['envoi']))  {
    if(isset($_POST['mdp']) AND !empty($_POST['mdp'])) {
        if($_POST['mdp'] == $motdepasse) {
            $accessgranted = 1;
        }else{
            $erreur = "";
        }
    }else{
        $erreur = "";
    }
}

if(!isset($accessgranted)) { ?>
<title>Panthère</title>
<link rel="shortcut icon" type="image/png" href="https://cdn.icon-icons.com/icons2/467/PNG/96/014_BlackPanther_2x_44229.png"/>
<link rel="stylesheet" href="style.css" />
<header>
<h1 class="neon"> Connexion </h1>
</header>
</hr>
<?php

if(isset($erreur)) { echo $erreur; }
?>
<link rel="stylesheet" href="style.css" />
<form class="form" action="" method="post"><p class="box"
    >Veuillez entrer le mot de passe ci-dessous :<br /></p><p class="box">
    Mot de passe : <input class="mdp" type="text" name="mdp" /></p>
    <p class="box"><input type="submit" name="envoi" value="Entrer"/></p>

</form>
<?php }else{
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Panthère</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" type="image/png" href="https://cdn.icon-icons.com/icons2/467/PNG/96/014_BlackPanther_2x_44229.png"/>
        
    </head>
    <body>

   



        <header>
           <h1 class="neon">Soirée montfort-sur-meu ancien garage peugeot</h1>
          
           
        </header>

        <br> <br> <br>
        
        <p align="center" class="name">Carte<br><br><iframe class="img" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d845.056547002528!2d-1.9484261876488562!3d48.13765781741795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480efc05fa2d6a89%3A0x900c44633f50c419!2sPEUGEOT%20-%20AUTO%20MONTFORT%20SERVICES!5e1!3m2!1sfr!2sfr!4v1677321301502!5m2!1sfr!2sfr" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        
        <p align="center" class="name">Vue de l'arrière<br><br><iframe class="img" src="https://www.google.com/maps/embed?pb=!4v1677344654592!6m8!1m7!1spEeLC9W0KkS8BtS5Mq-RJQ!2m2!1d48.13725394409556!2d-1.947637105041054!3f328.2282092346684!4f-7.235478382083457!5f0.7820865974627469" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
   
        <p align="center" class="name">Vue de face<br><br><iframe class="img" src="https://www.google.com/maps/embed?pb=!4v1677344537039!6m8!1m7!1sBUNQAfEhZjinP3J6NkMivg!2m2!1d48.13789700668715!2d-1.948089534630149!3f172.1865093252129!4f5.744764361671528!5f0.4000000000000002" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    
        <div>
            <p class="regle">Il s'agit d'un ancien garage qui est actuellement à l'abandon dans lequel nous allons organiser une soirée ce (28 mars 2023) il est possible de se garer sur le parking de la garre de plus la discrétion dans un premier temps sera une clef phare pour le bon déroulement de cette évenement de renom je compte sur vous.</p>
           
            
        </div>
 
    
    </body>
</html>



}

<?php }

?>

