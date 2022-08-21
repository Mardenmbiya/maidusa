<?php include('base.php'); ?>
<?php include("nave_bar_single.php") ?>
 <div class="marge_generale"></div>
   <div class="marge_generale"></div>

    <div class="framework_business fond_blanc">
        <div class="container_profil_general">
            <div class="cont_profil_general_1">
                <img src="images/Captuddre.PNG" alt="">
            </div>
            <div class="cont_profil_general_2">
               <span> Gloire Kafwalubi</span>
               <span class="txt3" style="font-weight: 400;">A rejoins il y a 5 jours</span>
               <a href="parametres.php"><span class="button_1 icon-pencil" style="width: fit-content;" > Editer le profil</span></a>
            </div>

        </div>
        <div class="container_profil_general_2">
            <div class="cont_profil_general_3">
                <span class="elements_profil" style="border-bottom:3px solid #416cb4; color: #416cb4;"><img src="images/icons/browser-free-icon-font (1).png" alt=""> Magazines</span>
                <!-- <span class="elements_profil"><img src="images/icons/book-alt-free-icon-font.png" alt="">Livres</span> -->
                <a href="parametres.html"><span class="elements_profil hover_all"><img src="images/icons/settings-free-icon-font.png" alt=""> Paramètres</span></a>
            </div>
            <div class="cont_mag_profile">
                <div class="container_mag_12">
                    <div class="container_mag_121">
                        <img src="images/bethany.jpg" alt="">
                        <span class="text_1">Bethany Dillon</span>
                        <span class="text_2">2,4K abonnés</span>
                    </div>
                    <div class="container_mag_121">
                        <img src="images/b (3).jpg" alt="">
                        <span class="text_1">TAYA</span>
                        <span class="text_2">50K abonnés</span>
                    </div>
                    <div class="container_mag_121">
                        <img src="images/b (1).jpg" alt="">
                        <span class="text_1">Tori Kelly</span>
                        <span class="text_2">1M abonnés</span>
                    </div>
                </div>

            </div>

        </div>
    </div>


     <?php include('form_creation_biographie.php'); ?>

    <div class="framework_business_droit">


            <!-- debut conteneur si la personnes n'a pas de profile Maidusa Business -->
           

            <div class="designframe ">
                <div class="sous_container">
                    <span class="button_1_profile" onclick="showmodal8()">+ Ajouter une biographie</span>
                    <div class="cont_profil_mag_txt2">
                         Créer un profile maidusa Business pour avoir accées aux contrats avec nos entreprises partenaires.
                    </div>
                </div>

            </div>

            <!-- fin de ce conteneur -->


            <!-- debut conteneur si la personnes a dejà commencer  à créer son compte Maidusa Business  -->
            

            <div class="designframe ">
                <div class="sous_container">
                    <div class="cont_profil_mag_txt2">
                         <div class="cont_profil_mag_txt">Veuillez patienter.</div> 
                         <div class="">D'ici à 5 jours vous aller etre contacter pour un entretient en visio conférence/presentielle avec un des verificateurs maidusa Business.</div> 
                    </div>
                </div>

            </div>

            <!-- fin de ce conteneur -->


            <!-- debut conteneur si la personnes a dejà commencer  à créer son compte Maidusa Business  -->
            

            <div class="designframe">
                <div class="sous_container">
                    <div class="cont_profil_mag_txt2">
                         <div class="cont_profil_mag_txt">Veuillez payer le test à 5$.</div> 
                         <div class="">Ce test est a effectuer 2 fois par ans, chaque 6 mois. Sans ce dernier votre profile Maidusa Business sera desactivé. La peinne de eactivation est de 30$</div> 
                    </div>
                </div>

            </div>

            <!-- fin de ce conteneur -->


            <div class="designframe">
                <div class="sous_container">
                    <div class="cont_profil_mag_txt marge_bas2">Curriculum</div>
                    <div class="bold_1">Etudes faites</div> <!-- conteneur titre  -->
                    <div class="marge_bas"> College la reference</div> <!-- conteneur description du titre -->

                    <div class="bold_1">Etudes faites</div> <!-- conteneur titre  -->
                    <div class="marge_bas"> College la reference</div> <!-- conteneur description du titre -->


                    <div class="bold_1">Voir plus</div>
                    <!-- Voir plus affiche le restant des ecris caché en javaScript dans ce meme conteneur -->

                </div>
            </div>


            <div class="designframe">
                <div class="sous_container">
                    <div class="cont_profil_mag_txt marge_bas2">Biographie</div>
                    <div class="bold_1">Jeunesse</div> <!-- conteneur titre  -->
                    <div class="marge_bas"> j'a vecu au  village toute ma vie mais je veux etre president meme vous!</div> <!-- conteneur description du titre -->

                    <div class="bold_1">Etudes</div> <!-- conteneur titre  -->
                    <div class="marge_bas"> College la reference</div> <!-- conteneur description du titre -->


                    <div class="bold_1">Voir plus</div>
                    <!-- Voir plus affiche le restant des ecris caché en javaScript dans ce meme conteneur -->

                </div>
            </div>
            


    </div>


    <div class="framework_business_gauche">

        <div class="designframe">
            <div class="sous_container">
                <div class="cont_profil_mag_txt marge_bas2">Liens</div>
                <div class="bold_1">Jeunesse</div> <!-- conteneur titre  -->
                <div class="marge_bas"> j'a vecu au  village toute ma vie mais je veux etre president meme vous!</div> <!-- conteneur description du titre -->

                <div class="bold_1">Etudes</div> <!-- conteneur titre  -->
                <div class="marge_bas"> College la reference</div> <!-- conteneur description du titre -->


                <div class="bold_1">Voir plus</div>
                <!-- Voir plus affiche le restant des ecris caché en javaScript dans ce meme conteneur -->

            </div>
        </div>
        
    </div>


   
   <?php include('footer.php'); ?>