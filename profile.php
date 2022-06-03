<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="shortcut icon" href="images/logo-1.png" type="image/x-icon">
</head>
<body>
    <nav class="navigation_bar_container bg_color_2">
        <div class="container_back" onclick="history.back()">
          <img src="images/icons/arrow-small-left-free-icon-font.png" alt="">

        </div>
        <div class="titre_page">
          Profil
        </div>
    </nav>
    <div class="container_profil_magazine1">
        <div class="container_profil_general">
            <div class="cont_profil_general_1">
                <img src="images/Captuddre.PNG" alt="">
            </div>
            <div class="cont_profil_general_2">
               <span> Gloire Kafwalubi</span>
               <span class="txt3" style="font-weight: 400;">A rejoins il y a 5 jours</span>
               <a href="compte.html"><span class="button_1" style="width: fit-content;">Editer le profil</span></a>
            </div>

        </div>
        <div class="container_profil_general_2">
            <div class="cont_profil_general_3">
                <span class="elements_profil" style="border-bottom:3px solid #416cb4; color: #416cb4;""><img src="images/icons/browser-free-icon-font (1).png" alt=""> Magazines</span>
                <span class="elements_profil"><img src="images/icons/book-alt-free-icon-font.png" alt="">Livres</span>
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
    <div class="container_profil_magazine13">
        <span class="button_1" onclick="showmodal8()">+ Ajouter une biographie</span>

    </div>
    <div class="cont_affiche_bio">
        <span class="txt3">Biographie</span> <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, eos nulla perferendis dolor ipsam aliquid cupiditate dolorem facere rerum. Animi repudiandae eos at tempore blanditiis molestiae quo praesentium doloremque cupiditate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deserunt illum impedit expedita. Animi corporis excepturi, provident quia sit quas doloremque quod quidem accusamus perspiciatis! Alias beatae perspiciatis voluptatum expedita?
    </div>
   <script src="js/main.js"></script>
   
</body>
</html>