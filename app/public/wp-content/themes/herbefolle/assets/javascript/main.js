console.log("main.js is loaded");

// ---X-------------- VARIABLES ------------X---- //
const hamburger = document.querySelector('.hamburger'); 
const navLinks = document.querySelector('.nav-links'); 
const links = document.querySelectorAll('.nav-links li'); 
const allLinks = [...document.getElementsByTagName('a')];
let mouseCursor = document.querySelector(".cursor"); 


// ----------- EXPEND NAV LINKS WHEN CLICKING BURGER ICON ---------- //

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('open');
  hamburger.classList.toggle('active');
}); 

// ------------------X------------ CUSTOM CURSOR ----------------X------------- //

window.addEventListener('mousemove', cursor); // triggers the cursor to make a div follow the pointer 
function cursor(e) {
  mouseCursor.style.top = e.pageY + 'px';
  mouseCursor.style.left = e.pageX + 'px';
}

// ------ CURSOR CHANGE WHEN HOVERING LINKS AND BURGER MENU -------  //

hamburger.addEventListener('mouseover', () => {mouseCursor.classList.add("active")});
hamburger.addEventListener('mouseout', () => {mouseCursor.classList.remove("active")});

allLinks.forEach( link => {
  link.addEventListener('mouseover', () => {mouseCursor.classList.add("active")});
  link.addEventListener('mouseout', () => {mouseCursor.classList.remove("active")});
});


// ------------------X------------ SITE TITLE HOVERING EFFECT ----------------X------------- //

const letters = gsap.utils.toArray('.letter').forEach(letter => {
  // on déclare une animation de rotation
  const anim = TweenMax.to(letter, 1, {rotation:-360, overwrite:"none"});
  // on ajoute les event listeners
  letter.addEventListener("mouseenter", () => anim.play() );
  letter.addEventListener("mouseleave", () => anim.reverse() );
});
