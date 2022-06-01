<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil | Maidusa</title>
    <link rel="shortcut icon" href="images/logo-1.png" type="image/x-icon">
</head>
<body>
    <div class="container_mag_acceuil">
       <span class="cont_profil_mag_txt"> Bienvenue sur Maidusa Social.</span>
       <span class="cont_profil_mag_txt2">Votre réseau social professionnel de réseautage et de partage du contenus.</span>
       <div class="cont_buttons_profil">
                <a href="login.html"><div class="button_4">Se connecter</div></a>
                <a href="sign_up.html"><div class="button_3">S'inscrire</div>
        </div> 

    </div>
    <div class="container_mag_acceuil2">
    Articles suggerés et articles des magazines aux quels vous êtes abonnés.

    </div>

    <?php include('bare_navigation.html'); ?>
    <?php include('suggestion.html'); ?>
   <?php include('Afficheur_article.html'); ?>
   <?php include('Afficheur_article_audio.html'); ?>
</body>
</html>
