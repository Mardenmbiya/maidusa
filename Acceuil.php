<?php include('base.php'); ?>
 <?php include('bare_navigation.php'); ?>

 <div class="marge_generale"></div>

 <div class="sidebar">
        <div class="sous_container">                   
   <div class="image_aceuil">
       <img src="images/icons/Hello-rafiki.png" alt="">
   </div>
    <div class="sous_container">
   <div class="cont_profil_mag_txt "> Bienvenue sur Maidusa Social.</div>
    <div class="cont_profil_mag_txt2">Votre réseau social professionnel de réseautage et de partage du contenus.</div>
      <div class="cont_buttons_profil_acceuil">
         
               <a href="sign_up.php"><div class="button_3">S'inscrire</div></a>
               <a href="login.php"><div class="button_4">Se connecter</div></a>
         
   </div>  
   </div> 
   </div>


   
 </div>


 <div class="unesoyez">

   <div class="sous_container">
  <div class="cont_profil_mag_txt "> Soyez à la une !</div>
   <div class="cont_profil_mag_txt2">Ajouter du nouveau contenus à votre magazine.</div>
     <div class="cont_buttons_profil_acceuil">
        
              <div class="button_3" onclick="showmodal('magazine_show')"><span class="icon-mode_edit"></span> Rédiger un article</div>
              <div class="button_4_au"onclick="showmodal('magazine_show')"> <span class="icon-audiotrack"></span>   Publier un audio </div>
        
  </div>  
  </div> 
  </div>
   <!--  <div class="container_mag_acceuil2">       
    <span>Articles suggerés et articles des magazines aux quels vous êtes abonnés.</span>
    </div> -->
    
    <?php include('posteur_article.php'); ?>
    <?php include('poster_audio.php'); ?> 
   <?php include('Afficheur_article.php'); ?>
   <?php include('Afficheur_article_audio.php'); ?> 
   <?php include"magazine_choix.php" ?>
   <?php include('footer.php'); ?>

  
   <script type="text/javascript">

    showtruc(){
    window.location.href="magazine_choix.php";

    }


   </script>