console.log("main.js is loaded");
// ---X-------------- BARBA.JS TRANSITIONS ------------X---- //
// function pageTransition() {
//   var tlTransitions = gsap.timeline(); 
//   tlTransitions.to()
// }


// barba.init({
//   sync: true, 
//   transitions: [{
//     async leave(data) {
//       const done = this.async(); 
//       pageTransition();
//       await(delay: 1500); 
//       done();
//     }, 

//     async enter
//   }]
// })

// ---X-------------- VARIABLES ------------X---- //
const hamburger = document.querySelector('.hamburger'); 
const navLinks = document.querySelector('.nav-links'); 
const links = document.querySelectorAll('.nav-links li'); 
const allLinks = document.querySelectorAll('a'); 
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


















// ------------------X------------ PAGE TRANSITION EFFECT ----------------X------------- //
console.log("page transition ready"); 
function pageTransition() {
  
  var btn = document.querySelector('.button'), 
      overlay = document.querySelector('.transition-overlay'), 
      loader = document.querySelector('.transition-overlay-loader'), 
      overlayTL = new TimelineMax(), 
      loaderTL = new TimelineMax();
  
    
  
    // ANIMATION ON ENTER
    overlayTL.fromTo( overlay, .6, { x: '-100%', bottom: 0 }, { x: '0%', ease: Power4.easeInOut } );
    loaderTL.fromTo( loader, .5, { y: '40', opacity: 0, delay: .30 }, { y: 0, opacity: 1, delay: .6, ease: Power2.easeOut } );   

    // ANIMATION ON ENTER
    overlayTL.to( overlay, .6, { x: '100%', ease: Power4.easeInOut, delay: .25 } );
    loaderTL.to( loader, .5, { x: '40', opacity: 0 } );

};

// pageTransition();


function delay(n) {
  n = n || 2000;
  return new Promise((done) => {
      setTimeout(() => {
          done();
      }, n);
  });
}


// --------------- BARBA ANIMATION CYCLE ------------- //

$(function() {
  barba.init({
    // We don't want "synced transition"
    // because both content are not visible at the same time
    // and we don't need next content is available to start the page transition
    // sync: true,
    transitions: [{
      // NB: `data` was not used.
      // But usually, it's safer (and more efficient)
      // to pass the right container as a paramater to the function
      // and get DOM elements directly from it
      async leave(data) {
        // Not needed with async/await or promises
        // const done = this.async();

        await pageTransition()
        // No more needed as we "await" for pageTransition
        // And i we change the transition duration, no need to update the delay…
        // await delay(1000)

        // Not needed with async/await or promises
        // done()

        // Loading screen is hiding everything, time to remove old content!
        data.current.container.remove()
      },

      async enter(data) {
        await pageTransition(data.next.container)
      },
      // Variations for didactical purpose…
      // Better browser support than async/await
      // enter({ next }) {
      //   return pageTransitionOut(next.container);
      // },
      // More concise way
      // enter: ({ next }) => pageTransitionOut(next.container),

    }]
  });

});




