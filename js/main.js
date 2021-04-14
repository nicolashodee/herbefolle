// NEW NAV BAR
const hamburger = document.querySelector('.hamburger'); 
const navLinks = document.querySelector('.nav-links'); 
const links = document.querySelectorAll('.nav-links li'); 
const allLinks = document.querySelectorAll('a'); 

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('open')
}); 



// CURSOR 
let mouseCursor = document.querySelector(".cursor"); 

window.addEventListener('mousemove', cursor); //
function cursor(e) {
  mouseCursor.style.top = e.pageY + 'px';
  mouseCursor.style.left = e.pageX + 'px';
}

hamburger.addEventListener('mouseover', () => {mouseCursor.classList.add("active")});
hamburger.addEventListener('mouseout', () => {mouseCursor.classList.remove("active")});

allLinks.forEach( link => {
  link.addEventListener('mouseover', () => {mouseCursor.classList.add("active")});
  link.addEventListener('mouseout', () => {mouseCursor.classList.remove("active")});
});






