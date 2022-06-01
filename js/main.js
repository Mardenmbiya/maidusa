function showModal(){
    var element =
    document.getElementById('menuinfo');
    element.classList.toggle("visible_modal");

}

function showModal2(){
  document.getElementById('container_search').style.display="block";
  
}
function closeModal(){
  document.getElementById('container_search').style.display="none";
}

function button_ab() {
    var x = document.getElementById("btn_ab");
    if (x.innerHTML === "S'abonner") {
      x.innerHTML = "Abonné";
    
    } else {
      x.innerHTML = "S'abonner";
     
    }
  }
function showmodal3(){
  document.getElementById("container_modd").style.display="block";
}
function closemodal3(){
  document.getElementById("container_modd").style.display="none";
}
function showmodal4(){
  document.getElementById("container_modd2").style.display="block";
}
function closemodal4(){
  document.getElementById("container_modd2").style.display="none";
}
function showmodal5(){
  document.getElementById("container_modd3").style.display="block";
}
function closemodal5(){
  document.getElementById("container_modd3").style.display="none";
}
function showmodal6(){
  document.getElementById("container_modd4").style.display="block";
}
function closemodal6(){
  document.getElementById("container_modd4").style.display="none";
}
function showmodal7(){
  document.getElementById("container_modd5").style.display="block";
}
function closemodal7(){
  document.getElementById("container_modd5").style.display="none";
}
