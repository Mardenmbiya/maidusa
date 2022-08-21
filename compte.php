<?php include('base.php'); ?>
<?php include("nave_bar_single.php") ?>
 <div class="marge_generale"></div>
   
    <div class="container_login_2">
        <div class="container_login_21">
        <div class="cont_afficheur_parametre"  onclick="showmodal3()">
            
            <div class="cont_afficheur_txt txt4">
              Photo de profil
            </div>
            <span class="color_1">Modifier la photo de profil</span>
        </div>

        
        <div class="cont_afficheur_parametre"   onclick="showmodal4()">
            
            <div class="cont_afficheur_txt txt4">
              Nom d'utilisateur
            </div>
            <span class="color_1">Modifier le nom du compte</span>
        </div>

        <div class="cont_afficheur_parametre"  onclick="showmodal5()">
            
            <div class="cont_afficheur_txt txt4">
              Mot de passe 
            </div>
            <span class="color_1">Changer de mot de passe </span>
        </div>
       </div>
    </div>
    <nav class="container_modifier" id="container_modd">
        <div class="container_modifier1">
            <span class="txt3 cont_mod_0">Modifier le profil
            <i class="icon-close2" onclick="closemodal3()"></i>
            </span>
            <div class="cont_mod">
                <label class="cont_imp" for="upl"> 
                    Importer une photo
                    <input class="" type="file" id="upl" style="display:none;">
               </label>
            </div>
            <div class="cont_mod1">
              <!-- Espace cropper-->
            </div>
            <div class="cont_mod2">
                <span class="button_1">Modifier</span>
            </div>
           
           
        </div>
            

    </nav>
    <nav class="container_modifier" id="container_modd2">
        <div class="container_modifier1">
            <span class="txt3 cont_mod_0">Modifier le nom
            <i class="icon-close2" onclick="closemodal4()"></i>
            </span>
            <div class="cont_mod1">
                <form action="">
                    <span>Ancien nom: John Doe</span>
                    <input type="text" name="" id="" placeholder="Nouveau nom" class="form_design2">
                 </form>
              </div>
           
            <div class="cont_mod2">
                <span class="button_1">Modifier</span>
            </div>
           
           
        </div>
            

    </nav>
    <nav class="container_modifier" id="container_modd3">
        <div class="container_modifier1">
            <span class="txt3 cont_mod_0">Modifier le mot de passe
            <i class="icon-close2" onclick="closemodal5()"></i>
            </span>
            <div class="cont_mod1">
                <form action="">
                    <input type="password" name="" placeholder="Ancien mot de passe" id="" class="form_design2">
                    <input type="password" name="" placeholder="Nouveau mot de passe" id="" class="form_design2">
                    <input type="password" name="" id="" placeholder="Confirmer le Nouveau mot de passe" class="form_design2">
                 </form>
              </div>
           
            <div class="cont_mod2">
                <span class="button_1">Modifier</span>
            </div>
           
           
        </div>
            

    </nav>
    <script src="js/main.js"></script>
<?php include('footer.php'); ?>