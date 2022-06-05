
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazine_detenus</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/icomoon/style.css">
</head>
<body>
<nav class="container_modifier" id="container_modd6">
    <div class="container_modifier_bio" style="display: flex;">
        <span class="txt3 cont_mod_0">Ajouter une Biographie
        <i class="icon-close2" onclick="closemodal8()"></i>
        </span>
        <div class="cont_mod_bio">
            <form action="">
                <span>Informations de Base 1/4</span>
                <input type="text" name="" id="" placeholder="Nom complet" class="form_design2">
                <input type="text" name="" id="" placeholder="Nationalité" class="form_design2">
                <input type="text" name="" id="" placeholder="Lieu de naissance" class="form_design2">
                <input type="date" name="" id="" placeholder="Nationalité" class="form_design2">
             </form>
          </div>
       
        <div class="cont_mod2">
            <span class="button_1" onclick="Nextmodal()" >Suivant</span>
        </div>
    </div>

    <div class="container_modifier_bio" id="nextmod">
        <span class="txt3 cont_mod_0">Ajouter une Biographie
        <i class="icon-close2" onclick="closemodal9()"></i>
        </span>
        <div class="cont_mod_bio">
            <form action="">
                <span>Études 2/4</span>
                <input type="text" name="" id="" placeholder="Nom de l'École primaire" class="form_design2">
                <input type="number" name="" id="" placeholder="Année d'obtention du certificat d'école primaire" class="form_design2">
                <input type="text" name="" id="" placeholder="Nom de l'École secondaire" class="form_design2">
                <input type="text" name="" id="" placeholder="Option suivie" class="form_design2">
                <input type="text" name="" id="" placeholder="Année de bachaloriat" class="form_design2">
             </form>
          </div>
       
        <div class="cont_mod2">
            <span class="button_2" onclick="Backmodal1()">Retour</span>
            <span class="button_1" onclick="Nextmodal1()">Suivant</span>
        </div>
    </div>

    <div class="container_modifier_bio" id="nextmod1" >
        <span class="txt3 cont_mod_0">Ajouter une Biographie
        <i class="icon-close2" onclick="closemodal9()"></i>
        </span>
        <div class="cont_mod_bio">
            <form action="">
                <span>Études 2/4</span>
                <input type="text" name="" id="" placeholder="Université ou Institut" class="form_design2">
                <input type="text" name="" id="" placeholder="Faculté suivie/ Département" class="form_design2">
                <input type="text" name="" id="" placeholder="Option ou promotion" class="form_design2">
                <input type="Année" name="" id="" placeholder="Année de Grade ou de Licencement" class="form_design2">
                <textarea type="text" name="" id="" placeholder="Autres études ou formations faites" class="form_design2"></textarea>
             </form>
          </div>
       
        <div class="cont_mod2">
            <span class="button_2" onclick="Backmodal2()">Retour</span>
            <span class="button_1"  onclick="Nextmodal2()">Suivant</span>
        </div>
    </div>

    <div class="container_modifier_bio" id="nextmod2">
        <span class="txt3 cont_mod_0">Ajouter une Biographie
        <i class="icon-close2" onclick="closemodal9()"></i>
        </span>
        <div class="cont_mod_bio">
            <form action="">
                <span>Vie professionelle et privée 3/4</span>
             
                <textarea type="text" name="" id="" placeholder="Décrivez votre travail ou vos responsabilités actuelles" class="form_design2"></textarea>
                <textarea type="text" name="" id="" placeholder="Décrivez vos compétences de travail ou pscychologique" class="form_design2"></textarea>
                <span>Êtes vous en couple?</span>
                <input type="text" name="" id="" placeholder="Nom de votre partenaire" class="form_design2">
                <select name="" id="" class="form_design2" placeholder="ke">
                          <option value="" disabled selected hidden>Type de relation</option>
                          <option value="">Marié(e)</option>
                          <option value="">Fiancé(e)</option>
                          <option value="">Peti(e) ami(e)</option>
                          <option value="">Union libre</option>
                          
                </select>
               
             </form>
          </div>
       
        <div class="cont_mod2">
            <span class="button_2" onclick="Backmodal3()">Retour</span>
            <span class="button_1" onclick="Nextmodal3()">Suivant</span>
        </div>
    </div>

    <div class="container_modifier_bio" id="nextmod3">
        <span class="txt3 cont_mod_0">Ajouter une Biographie
        <i class="icon-close2" onclick="closemodal9()"></i>
        </span>
        <div class="cont_mod_bio">
            <form action="">
                <span>Jeunesse 4/4</span>
             
                <textarea type="text" name="" id="" placeholder="Décrivez les activités de votre jeunesse. Ex: Joueur de basket, etc..." class="form_design2"></textarea>
                <span>Vie active</span>
                <textarea type="text" name="" id="" placeholder="Que faites-vous actuellement?" class="form_design2"></textarea>
                <input type="text" name="" id="" placeholder="Ajouter une personne de réference" class="form_design2">
              
            </form>
          </div>
       
        <div class="cont_mod2">
            <span class="button_2" onclick="Backmodal4()">Retour</span>
            <span class="button_1" onclick="Nextmodal4()">Suivant</span>
        </div>
    </div>


    <div class="container_modifier_bio" id="nextmod4">
        <span class="txt3 cont_mod_0">Ajouter une Biographie
        <i class="icon-close2" onclick="closemodal9()"></i>
        </span>
        <div class="cont_mod_bio">
            <form action="">
                <span>Bravo! Finalisez votre Biographie.</span>
                <div class="cont_mod">
                <label class="cont_imp" for="upl"> 
                    Importer une photo
                    <input class="" type="file" id="upl" style="display:none;">
               </label>
            </div>
             
                
                <select name="" id="" class="form_design2" placeholder="ke">
                          <option value="" disabled selected hidden>Choisissez un style de narration!</option>
                          <option value="">Autobiographique</option>
                          <option value="">Classique</option>
                         
                          
                </select>
               
             </form>
          </div>
       
        <div class="cont_mod2">
            <span class="button_2" onclick="Backmodal5()">Retour</span>
            <a href="profile.php"><span class="button_1" onclick="Nextmodal5()">Enregistrer</span></a>
        </div>
    </div>
</nav>

<nav class="container_modifier_cancel" id="container_cancel">
    <div class="container_modifier_bio_can">
        <span class="txt3 cont_mod_0">Voulez-vous vraiment annuler?</span>
        <div class="cont_mod2">
            <a href="profile.php"><span class="button_2">Oui, Annuler</span></a>
            <span class="button_1" onclick="Nextmodal6()">Non, Poursuivre</span>
        </div>
    </div>
</nav>

<script src="js/main.js">

</script>
</html>
</body>