function showModal(){
    var element =
    document.getElementById('menuinfo');
    element.classList.toggle("visible_modal");
    

}
window.onclick = function(event) {
  if (event.target != getElementById('menuinfo1')) {
      menuinfo.style.display = "none";
  }

}
function closeMenu(){
  getElementById('menuinfo').style.display="none";

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
function showmodal8(){
  document.getElementById("container_modd6").style.display="block";
}
function closemodal8(){
  document.getElementById("container_modd6").style.display="none";
}


var toggle_btn = document.getElementById('theme-btn');
var body = document.getElementsByTagName('body')[0];
var dark_theme_class = 'dark';

toggle_btn.addEventListener('click', function() {
 if (body.classList.contains(dark_theme_class)) {
 body.classList.remove(dark_theme_class);
}
 else {
 body.classList.add(dark_theme_class);
}

});



function Nextmodal(){
  document.getElementById("nextmod").style.display="flex"
}
function Nextmodal1(){
  document.getElementById("nextmod1").style.display="flex"
}
function Backmodal1(){
  document.getElementById("nextmod").style.display="none"
}
function Nextmodal2(){
  document.getElementById("nextmod2").style.display="flex"
}
function Backmodal2(){
  document.getElementById("nextmod1").style.display="none"
}
function Nextmodal3(){
  document.getElementById("nextmod3").style.display="flex"
}
function Backmodal3(){
  document.getElementById("nextmod2").style.display="none"
}
function Nextmodal4(){
  document.getElementById("nextmod4").style.display="flex"
}
function Backmodal4(){
  document.getElementById("nextmod3").style.display="none"
}
function Nextmodal5(){
  document.getElementById("container_modd6").style.display="none"
}
function Backmodal5(){
  document.getElementById("nextmod4").style.display="none"
}

function closemodal9(){
  document.getElementById("container_cancel").style.display="block";
}
function Nextmodal6(){
  document.getElementById("container_cancel").style.display="none"
}
