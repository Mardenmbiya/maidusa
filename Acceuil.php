<?php include('base.php'); ?>
<body>
    <div class="container_mag_acceuil border_general">
       <span class="cont_profil_mag_txt"> Bienvenue sur Maidusa Social.</span>
       <span class="cont_profil_mag_txt2 color_3">Votre réseau social professionnel de réseautage et de partage du contenus.</span>
       <div class="cont_buttons_profil">
                <a href="login.php"><div class="button_4">Se connecter</div></a>
                <a href="sign_up.php"><div class="button_3">S'inscrire</div></a>
        </div> 

    </div>
    <div class="container_mag_acceuil border_general">
       <span class="cont_profil_mag_txt">Soyez à la Une!</span>
     
       <div class="cont_buttons_profil">
                <a href="magazine_choix.php"><div class="button_4">Rédiger un article</div></a>
                <a href="poster_audio.php"><div class="button_3">Poster un audio</div></a>
        </div> 

    </div>
    <div class="container_mag_acceuil2">
        <img src="images/arrow-boxed-outline-filled.svg" alt="">
    <span>Articles suggerés et articles des magazines aux quels vous êtes abonnés.</span>
    </div>
    
    <?php include('bare_navigation.php'); ?>
    <?php include('suggestion.php'); ?>
   <?php include('Afficheur_article.php'); ?>
   <?php include('Afficheur_article_audio.php'); ?>
</body>
<script>
        document.getElementById('home').style.color = '#416cb4';
     
    

</script>
</html>
