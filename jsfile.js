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

//check for clicks when the menu is opened
/*document.addEventListener("click", (evt) => {
  const menu = document.querySelector(".nav-container");
  let clicked = evt.target; // clicked element      
  do {
    if(clicked == menu) {
      //click inside
      return;
    }
    // Go up the DOM
    clicked = clicked.parentNode;
  } while (clicked);      
  clearView();//click outside.
})*/


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