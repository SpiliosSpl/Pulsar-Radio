//open-close mobile menu
function menu() {
  var x = document.querySelector(".nav-links");
  var icon = document.getElementById("menu-icon");


  if(x.style.display == '' || x.style.display == 'none'){
    x.style.display = 'flex';
    x.style.backgroundColor = 'rgba(0, 0, 0, 0.4)';
    icon.style.opacity = 0.8;
    icon.style.transform = 'rotate(180deg)';
    topScroll();
  }
  else {
    x.style.display = 'none';
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

//closes the menu
function clearView(){
  var x = document.querySelector(".nav-links");
  var icon = document.getElementById("menu-icon");

  if (x.style.display === 'flex'){
    x.style.display = 'none';
    icon.style.opacity = 1;
    icon.style.transform = 'rotate(0deg)';
  }
}

//scroll to top
function topScroll() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

/*Script needed to fix menu collapse when enlarging window with mobile menu closed.*/