// NEW NAV BAR
const hamburger = document.querySelector('.hamburger'); 
const navLinks = document.querySelector('.nav-links'); 
const links = document.querySelectorAll('.nav-links li'); 
const allLinks = document.querySelectorAll('a'); 

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('open');
  hamburger.classList.toggle('active');
}); 


// LINKS IN MENU ANIMATION
// HOMEPAGE LOADING
const tl = gsap.timeline({ defaults: {ease: 'power3.out'} }); //initializing a timeline
tl.from(".menu-animation", {y: "45%",  duration: 0.5, stagger: 0.5});




// CURSOR 
let mouseCursor = document.querySelector(".cursor"); 

window.addEventListener('mousemove', cursor); //
function cursor(e) {
  mouseCursor.style.top = e.pageY + 'px';
  mouseCursor.style.left = e.pageX + 'px';
}

//HAMBRGER EFFECT
hamburger.addEventListener('mouseover', () => {mouseCursor.classList.add("active")});
hamburger.addEventListener('mouseout', () => {mouseCursor.classList.remove("active")});

allLinks.forEach( link => {
  link.addEventListener('mouseover', () => {mouseCursor.classList.add("active")});
  link.addEventListener('mouseout', () => {mouseCursor.classList.remove("active")});
});


//SITE TITLE HOVER ANIMATION
const letters = gsap.utils.toArray('.letter').forEach(letter => {
  // on déclare une animation
  const anim = TweenMax.to(letter, 1, {rotation:-360, overwrite:"none"});
  // on ajoute les event listeners
  letter.addEventListener("mouseenter", () => anim.play() );
  letter.addEventListener("mouseleave", () => anim.reverse() );
});




