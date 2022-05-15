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



function imageLike() {
    var img1 = "images/icons/heart-free-icon-font (1).png",
        img2 = "images/icons/heart-free-icon-font.png";
    var imgElement = document.getElementById('imgLike');
    
    imgElement.src = (imgElement.src === img1)? img2 : img1;
 }