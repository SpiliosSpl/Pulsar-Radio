//open-close mobile menu
function menu() {
  var x = document.getElementById("nav");
  var icon = document.getElementById("menu-icon");

  if(x.style.width == '60vw'){
    x.style.width = '0px';
    icon.style.opacity = 1;
    icon.style.transform = 'rotate(0deg)';
  }
  else{
    x.style.width = "60vw";
    icon.style.opacity = 0.7;
    icon.style.transform = 'rotate(180deg)';
  }
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  let mybutton = document.getElementById("scrollBtn");
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

//scroll to top
function topScroll() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function popup(){
  document.getElementById('background').style.display='block';
}

function close_popup(){
  document.getElementById('background').style.display='none';
}

function show_pass(x,y){
  var pass=document.getElementById(x);
  var icon=document.getElementById(y);

  if (pass.type=="password"){
    pass.type="text";
    icon.style.color="white";
  }
  else{
    pass.type="password";
    icon.style.color="rgb(251, 167, 251)";
  }
}