function showModal(){
    var element =
    document.getElementById('menuinfo');
    element.classList.toggle("visible_modal");

}


function button_ab() {
    var x = document.getElementById("btn_ab");
    if (x.innerHTML === "S'abonner") {
      x.innerHTML = "Abonné";
    
    } else {
      x.innerHTML = "S'abonner";
     
    }
  }

  function image_like() {
    if (document.getElementById("img_like").src == "images/icons/heart-free-icon-font (1).png"){
        document.getElementById("img_like").src = "images/icons/heart-free-icon-font.png";
    } else {
        document.getElementById("img_like").src = "images/icons/heart-free-icon-font (1).png";
    }
}