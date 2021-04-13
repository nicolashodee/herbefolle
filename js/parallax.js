//TESTS
const coucou = document.getElementById("parallax1");
console.log("coucou is now", coucou);
console.log("JS loaded");

// Parallaxe vers le bas
function parallaxDown (element, distance, speed) {

  const item = document.querySelector(element);
  
  item.style.transform = `translateY(${distance * speed}px)`; 

}; 

//Parallaxe vers le haut
function parallaxUp (element, distance, speed) {

  const item = document.querySelector(element); 
  item.style.transform = `translateY(${-distance * speed}px)`; 

}; 

//Event listener
window.addEventListener("scroll", function() {
  parallaxDown("#parallax1", window.scrollY, 0.3);
  parallaxUp("#parallax2", window.scrollY, 0.2);
}); 