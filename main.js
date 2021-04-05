console.log("JS loaded");

let toggleMenuStatus = false ; // check if the menu is expanded or not, false when opening the page

let toggleMenu = function () {
  
  if (toggleMenuStatus == false) {
    let getBurger = document.getElementById("burger");
    let getBurgerIcon = document.querySelector("#burger-icon");  
    let getMenu = document.getElementById("menu"); 

    console.log(getBurgerIcon.classList);

    getMenu.classList.toggle("menu--active"); 
    getBurgerIcon.classList.toggle("active"); 

    console.log("menu open");
  }


  // console.log(toggleMenuStatus)

}