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


function imageLike(){
    var y = document.getElementById("imgLike");
    if (y.src === "images/icons/heart-free-icon-font (1).png"){
        y.src =  "images/icons/heart-free-icon-font.png";
    
    } else {
        y.src= "images/icons/heart-free-icon-font (1).png";
    }
}