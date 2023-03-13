//open-close mobile menu
function menu() {
  var x = document.querySelector("nav");
  var icon = document.getElementById("menu-icon");


  if(x.style.width == '0px'){
    x.style.width = "60vw";
    icon.style.opacity = 0.7;
    icon.style.transform = 'rotate(180deg)';
  }
  else {
    x.style.width = '0';
    icon.style.opacity = 1;
    icon.style.transform = 'rotate(0deg)';
  }
}

//check for clicks when the menu is opened
document.addEventListener("click", (evt) => {
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
})


//scroll to top
function topScroll() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}