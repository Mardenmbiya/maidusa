

<?php include('base.php'); ?>
<nav class="navigation_bar_container bg_color_2">
    <div class="container_back" onclick="history.back()">
         <i class="bi bi-arrow-left"></i>

        </div>
        <div class="titre_page">
           Rédiger un article
    </div>
</nav>

    <div class="container_rediger border_general">
        <span class="txt3 cont_mod_0">Rédiger un article
        <i class="icon-close2" onclick="closemodal7()"></i>
        </span>
        <div class="cont_mod3">
            <form action="">
                <input type="text" name="" placeholder="Titre de l'article" id="" class="form_design2" >
                <textarea type="text" name="" placeholder="Contenu de l'article..." id="" class="form_design2" style="height: 100px;"></textarea>
                <input type="text" name="" placeholder="Coller juste un lien YouTube" id="" class="form_design2" style="border: 1px solid firebrick" >
             </form>
        </div>
        <div class="cont_mod2 txt2" >Ajouter un paragraphe</div>
       
        <div class="cont_mod2">
            <label class="cont_imp" for="upl"> 
                Lier une photo ou vidéo
                <input class="" type="file" id="upl" style="display:none;">
           </label>
        </div>
        <div class="container_preview_img">
            <img src="images/got.jpg" alt="">

        </div>
        <div class="cont_mod2">
            <span class="button_1">Publier</span>
        </div>
       
       
       
    </div>
        

