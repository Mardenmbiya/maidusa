let storage = window.localStorage;


function showModal(){
  document.getElementById('menuinfo').style.display="block";
}
function closeModalMenu(){
  document.getElementById('menuinfo').style.display="none"
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
function showmodal8(){
  document.getElementById("container_modd6").style.display="block";
}
function closemodal8(){
  document.getElementById("container_modd6").style.display="none";
}
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





// START: Dark mode

if(storage.getItem("style")!=undefined){
  document.getElementById('stylechanger').setAttribute('href', storage.getItem('style'));
}else{
  storage.setItem("style", 'style/main.css'); // Save to storage

}

function switcher () {


  let currentstyle = document.getElementById('stylechanger').getAttribute('href').trim();
  
  if (currentstyle == ('style/main.css')){

      document.getElementById('stylechanger').setAttribute('href', 'style/style.dark.css');
      storage.setItem("style", 'style/style.dark.css');
  }
  
  else{

      document.getElementById('stylechanger').setAttribute('href', 'style/main.css');
      storage.setItem("style", 'style/main.css');
  }
   
}


// END: Dark mode


// START: Like action



function liked(x){
  x.classList.toggle("bi-heart-fill");
  
}