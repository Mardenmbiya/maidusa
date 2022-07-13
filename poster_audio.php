

<?php include('base.php'); ?>
<nav class="navigation_bar_container bg_color_2">
    <div class="container_back" onclick="history.back()">
         <i class="bi bi-arrow-left"></i>

        </div>
        <div class="titre_page">
          Poster un audio
    </div>
</nav>


    <div class="container_rediger border_general">
        <span class="txt3 cont_mod_0">Poster un audio
        <i class="icon-close2" onclick="closemodal7()"></i>
        </span>
        <div class="cont_mod2">
            <span class="button_3">Appuyez pour enregistrer...</span>
        </div>
        
        <div class="cont_mod3">
            <form action="">
                <input type="text" name="" placeholder="Ajouter un titre" id="" class="form_design2"  >
                <textarea type="text" name="" placeholder="Ajouter une description" id="" class="form_design2" style="height: 200px;"></textarea>
               
             </form>
        </div>
       
        <div class="cont_mod2">
            <label class="cont_imp" for="upl"> 
              Importer un audio
                <input class="" type="file" id="upl" style="display:none;">
           </label>
        </div>
        <div class="container_preview_img">
        <div class="cont_audio_article_2">
            <audio src="Life_could_be_a_dream.mp3" controls></audio>
        </div>
        </div>
        <div class="cont_mod2">
            <span class="button_1">Publier</span>
        </div>
       
       
       
    </div>
        

