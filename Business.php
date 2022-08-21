<?php include('base.php'); ?>

<body>
  <?php include('bare_navigation.php'); ?>


  <div class="conteneur_pub">

    <div class="image_pub"><img src="images/b (3).jpg"></div>

    <div class="conteneur_pub_ecris">
      <div class="sous_container">
        <div class="nom_description_pub">

         <!--  <div class="nom_pub"> Nom du profile</div>

          <div class="description_pub">description en plusoeurs lignes max deux 3 ligne ou ....caracteres</div> -->

        </div>
      </div>
    </div>
    <a href="profile.php" class="boutton_pub "> Plus <span class="icon-arrow-circle-right"></span></a>

  </div>

  <div class="creer_profile">

    <div class="sous_container">
   <div class="cont_profil_mag_txt "> Créer un profile !</div>
    <div class="cont_profil_mag_txt2">Créer un profile maidusa Business pour avoir accées aux contrats avec nos entreprises partenaires.</div>
      <div class="cont_buttons_profil_acceuil">
         
               <!-- <a href="magazine_choix.php"><div class="button_3"><span class="icon-mode_edit"></span> Rédiger un article</div></a> -->
              <div class="button_4_au"  onclick="showmodal8()">    Commencer
                <span class="icon-angle-right"></span> </div>
         
   </div>  
   </div> 
   </div>


   <?php include('form_creation_biographie.php'); ?>
 <!--   <div class="cont_profil_mag_t">
       <span class="button_1">+ Ajouter une biographie</span>

   </div> -->


  <div class="cont_afficheur_offre border_general">
    <div class="sous_container">
      <!-- <div class="txt3">Profils professionelles</div> -->
      <div class="txt6 margebas4">Trouver des prestataires de services libérales, authentifiés et<!-- <div>  -->certifiés par <span class="nom_maidusa_sys">Maidusa Business</span><!-- </div> --> </div>

        <!-- cconteneur profile de la boucle -->
         <?php include("afficheur_profile.php") ?>
        <!-- cconteneur profile de la boucle -->


    </div>
  </div>
  <script>
    document.getElementById('bus').style.color = '#416cb4';


  </script>
  <?php include('critiques.php'); ?>
   <?php include('cv.php'); ?>
  <?php include('bio.php'); ?>
   <?php include('footer.php'); ?>