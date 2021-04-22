// // Parallaxe vers le bas
// function parallaxDown (element, distance, speed) {
//   const item = document.querySelector(element);
//   item.style.transform = `translateY(${distance * speed}px)`; 
// }; 

// // Parallaxe vers le haut
// function parallaxUp (element, distance, speed) {
//   const item = document.querySelector(element); 
//   item.style.transform = `translateY(${-distance * speed}px)`; 

// }; 

// // Event listener triggering the parallax
// window.addEventListener("scroll", function() {
//   parallaxDown("#parallax1", window.scrollY, 0.3);
//   parallaxUp("#parallax2", window.scrollY, 0.2);
// }); 