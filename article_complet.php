<?php include('base.php'); ?>
<?php include("nave_bar_single.php") ?>
 <div class="marge_generale"></div>

    <div class="cont_afficheur_article2 border_general">
       

       
        <div class="cont_afficheur_images2" 
        onclick="showmodal('image_vue')">
            <img src="images/cercle.jpg" alt="">
            <div class="voir_image"> Voir l'image <span class="icon-external-link"></span> </div>
        </div>
        <div class="sous_container">
        <div class="cont_afficheur_art_profil">
            <div class="cont_afficheur_profil">
                <img src="images/logo.png" alt="">
            </div>
            <div class="cont_afficheur_nom">
             Cercle Scientifique Math-info
            </div>
              <div class="cont_afficheur_nom_admin">
                <i class="bi bi-file-person-fill"></i>
              Martin Ilunga
              · 2h
            </div>
            <button class="cont_afficheur_abonner" onclick="button_ab()">
               <span id="btn_ab">S'abonner</span>
                
            </button>
          </div>
            
        
        <div class="titre_1">Cercle Scientifique Math-info, une conférence, une équipe!</div>
        <div class="titre_3">Ce samedi 14 juin, le Cercle Scientifique Math-info a tenu une conférence sous le thème le jeune Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed provident, quod veritatis, voluptatem debitis reiciendis dicta nihil necessitatibus explicabo ad atque vel dolore non, illo ducimus? Enim voluptate odit reiciendis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, aliquid inventore incidunt accusamus ex maiores ipsa accusantium fugiat iure quam eos cum pariatur unde quisquam voluptatem itaque eaque, enim facilis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, aperiam! Voluptates reiciendis obcaecati reprehenderit ipsam. Ea, possimus. Facere corporis commodi, labore architecto odit totam dolorum atque, dolor at, est facilis.</div>

        <div class="cont_afficheur_reaction">
            <div class="cont_reaction1">
               <i class="bi bi-heart-fill"></i>
                   130
            </div>
            <div class="cont_reaction1">
               
                  240 Commentaires
            </div>
            <div class="cont_reaction1">
                <i class="bi bi-eye-fill"></i>
                1020 Vues
            </div>
           

        </div>
        <div class="cont_afficheur_reaction_react">
            <div class="cont_reaction1_react">
               <i class="bi bi-heart"></i>
                  
            </div>
            <div class="cont_reaction1_react">
               
               
            </div>
            <div class="cont_reaction1">
               
            </div>
            <div class="cont_reaction2">
               <span> <i class="bi bi-share-fill"></i>Partager</span>
                
                <i class="bi bi-whatsapp"></i>
                <i class="bi bi-instagram"></i>
            </div>

        </div>
        <div class="commentaire">
            <form action="">
                <textarea name="" id="" cols="30" rows="10" placeholder="Tapez un commentaire" class="form_design"></textarea>
               
            </form>
        </div>
        <div class="commentaire_send">
            <button class="button_1">Poster</button>
        </div>

        <div class="commentaires_aff">
            <div class="commentaire_1">
                <div class="commentaire_img"><img src="images/lecrae.jpg" alt=""></div>
                
              
            </div>
            <div class="commentaires_text"> 
                <span class="txt4">John Doe Xavier <span style="color: gray; font-weight: 400;"> · 2 min</span></span> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam voluptatum eaque suscipit eum iste, soluta omnis. Optio alias quod temporibus? At quae molestias labore facilis mollitia reprehenderit, fugit eligendi dolor.
            </div>
            

        </div>
        <div class="commentaires_aff">
            <div class="commentaire_1">
                <div class="commentaire_img"><img src="images/lecrae.jpg" alt=""></div>
                
              
            </div>
            <div class="commentaires_text"> 
                <span class="txt4">John Doe Xavier <span style="color: gray; font-weight: 400;"> · 2 min</span></span> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam voluptatum eaque suscipit eum iste, soluta omnis. Optio alias quod temporibus? At quae molestias labore facilis mollitia reprehenderit, fugit eligendi dolor.
            </div>
            

        </div>
       
        <div class="commentaires_aff">
            <div class="commentaire_1">
                <div class="commentaire_img"><img src="images/lecrae.jpg" alt=""></div>
                
              
            </div>
            <div class="commentaires_text"> 
                <span class="txt4">John Doe Xavier <span style="color: gray; font-weight: 400;"> · 2 min</span></span> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam voluptatum eaque suscipit eum iste, soluta omnis. Optio alias quod temporibus? At quae molestias labore facilis mollitia reprehenderit, fugit eligendi dolor.
            </div>
            

        </div>
       
       </div>
    </div>
    <?php include('vue_image.php'); ?>
  <?php include('footer.php'); ?>