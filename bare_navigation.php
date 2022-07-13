<body>
    <nav class="navigation_bar_container bg_color_2">
        <div class="container_logo"><img src="images/logo-2.png" alt=""></div>
        <div class="container_search">
            <div class="container_search_1">
                <div class="container_search_form">
                    <i class="bi bi-search fs-5" style="margin-right:5px ; cursor: pointer;"></i>
                    <form action="">
                       
                        <input type="search" placeholder="Recherche..." name=""  class="form_design" >
                       
                    </form>
                </div>
            </div>
        </div>
        <div class="container_icons">
            <a href="Acceuil.php"><div class="container_icon_1"><i id="home" class="bi bi-house-fill"></i id="home1"><span>Acceuil</span></div></a>
           <a href="Magazine.php"><div class="container_icon_1"><i id="mag" class="bi bi-layout-text-window"></i><span id="mag">Magazine</span></div></a>
           <a href="Business.php"><div class="container_icon_1"><i id="bus" class="bi bi-briefcase-fill"></i><span id="bus1">Business</span></div></a>
           <a href="notification.html"><div class="container_icon_1">
            <div class="new_message_container" ></div>
                    <i class="bi bi-bell-fill"></i><span>Notifications</span>
            </div></a>

            <a href="messages.php"><div class="container_icon_1">
                <i class="bi bi-chat-left-dots-fill"></i><span>Messages</span></div>
            </a>
          
        </div>
        <div class="container_icons_m" >
            <div class="container_icons_mi" onclick="showModal()"><i class="bi bi-list"></i><span>Menu</span></div>
        </div>
    </nav>
<nav class="container_menu_element_cont " id="menuinfo" onclick="closeModalMenu()"> 
    <nav class="container_menu_element">
        <div class="container_menu_element_profil">
            <a href="profile.php"><div class="container_menu_element_profil_1">
                <div class="container_profil_1"><img src="images/Captuddre.PNG" alt=""></div>
            </div>
            <div class="container_menu_element_profil_2">
                <div class="container_name_1">Gloire Kafwalubi</div>
                <div class="container_name_2">Voir votre profile</div>
            </div></a>                                                                      

        </div>
       
<a href="parametres.html"><div class="container_menu_element_1">
            <span class="container_menu_icon">
                <i class="bi bi-gear-fill"></i>
            </span>
            <span class="container_menu_titre">Paramètres</span>
        </div></a>
        <div class="container_menu_element_1">
            <div class="container_menu_icon"><i class="bi bi-arrow-down-circle-fill"></i></div>
            <div class="container_menu_titre">Installer Android App</div>
        </div>
        <div class="container_menu_element_1">
            <div class="container_menu_icon"><i class="bi bi-journals"></i></div>
            <div class="container_menu_titre">Bibliothèque Virtuelle</div>
        </div>
        <div class="container_menu_element_1">
            <div class="container_menu_icon"><i class="bi bi-book-fill"></i></div>
            <div class="container_menu_titre">Supergénie</div>
        </div>
        <div class="container_menu_element_1">
            <div class="container_menu_icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div class="container_menu_titre">Géolocalisation</div>
        </div>
        <div class="container_menu_element_1">
            <div class="container_menu_icon"><i class="bi bi-question-circle-fill"></i></div>
            <div class="container_menu_titre">Aide</div>
        </div>
        <div class="container_menu_element_1">
            <div class="container_menu_icon"><i class="bi bi-power"></i></div>
            <div class="container_menu_titre">Se déconnecter</div>
        </div>
        <div class="container_menu_element_1" onclick="switcher()">
            <div class="container_menu_icon"><i class="bi bi-toggle2-off"></i></div>
            <div class="container_menu_titre">Mode sombre</div>
        </div>

    </nav>
</nav>
    
   
</body>
</html>