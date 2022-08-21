
    <div class="cont_afficheur_article border_general">
      <div class="sous_container_1">
        <div class="cont_afficheur_description">
            <div class="titre_1 marge_bas">Message aux entrepreneurs</div>
            <div class="titre_2">Dans la vie pour entreprendre il faut prendre des risques importants...</div>
        </div>
        </div>
        <div class="cont_audio_article">
            <audio src="Life_could_be_a_dream.mp3" controls></audio>
        </div>

        
        <div class="cont_afficheur_art_profil">
            <div class="cont_afficheur_profil">
                <img src="images/maidusa.png" alt="">
            </div>
            <div class="cont_afficheur_nom">
                Maidusa Social
            </div>
            <div class="cont_afficheur_nom_admin">
              <img src="images/icons/ese.png" alt="">
              Entreprise
              · 2h
            </div>
            <button class="cont_afficheur_abonner" onclick="button_ab()">
               <span id="btn_ab">S'abonner</span>
                
            </button>
        </div>
       <div class="sous_container">
        
        <div class="cont_afficheur_reaction">
            <div class="cont_reaction1">
               <i class="bi bi-heart-fill"></i>
                   1,5k
            </div>
            <div class="cont_reaction1">
               
                  500 Commentaires
            </div>
            <div class="cont_reaction1">
                <i class="bi bi-eye-fill"></i>
                2,3k Vues
            </div>
           

        </div>
        <div class="cont_afficheur_reaction_react">
            <div class="cont_reaction1_react">
               <i class="bi bi-heart"></i>
                  
            </div>
            <div class="cont_reaction1_react">
               
                <i class="bi bi-chat"></i> Commenter
            </div>
            <div class="cont_reaction1">
               
            </div>
            <div class="cont_reaction2">
               <span> <i class="bi bi-share-fill"></i>Partager</span>
                
                <i class="bi bi-whatsapp"></i>
                <i class="bi bi-instagram"></i>
            </div>

        </div>
        </div>        
    </div>

    <script type="text/javascript">
        function imageLike(){
           var u = document.getElementById("imgLike").src;
           if (u.indexOf("icon2.png")!=
           -1){
               document.getElementById("imgLike").src = "icon1.png";

           }else { 
            document.getElementById("imgLike").src = "icon2.png";
           }
        }
    </script>
