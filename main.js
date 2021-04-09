// MENU FUNCTION 
let toggleMenuStatus = false ; // check if the menu is expanded or not, false when opening the page

let toggleMenu = function () {
  
  if (toggleMenuStatus == false) {
    let getBurger = document.getElementById("burger");
    let getBurgerIcon = document.querySelector("#burger-icon");  
    let getMenu = document.getElementById("menu"); 

    getMenu.classList.toggle("menu--active"); 
    getBurgerIcon.classList.toggle("active"); 
  }
}

//NEW NAV BAR

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}