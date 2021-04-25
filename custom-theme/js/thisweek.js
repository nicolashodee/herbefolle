console.log("thisweek.js loaded");
// ------------ THIS WEEK PAGE ANIMATIONS ---------- //
const tlWeek = gsap.timeline({ defaults: {ease: 'power3.out', duration: 1}}); 

tlWeek.from(".thisweek", {x: "-5%", opacity: 0, delay: 0.5});
tlWeek.from(".article__thisweek", {y: "35%", opacity: 0});
tlWeek.from(".thisweek-image", {x: "35%", opacity: 0});


// TRANSITION EFFECT

;(function() {
  
  'use strict';
  
  var btn = document.querySelector('.button'), 
      overlay = document.querySelector('.transition-overlay'), 
      loader = document.querySelector('.transition-overlay-loader'), 
      overlayTL = new TimelineMax(), 
      loaderTL = new TimelineMax();
  

  
  var animateOut_2 = function() {
    overlayTL.to( overlay, .6, { x: '100%', ease: Power4.easeInOut, delay: .25 } );
    loaderTL.to( loader, .5, { x: '40', opacity: 0 } );
  }
  
  var animateIn = function() {
    overlayTL.fromTo( overlay, .6, { x: '-100%', bottom: 0 }, { x: '0%', ease: Power4.easeInOut } );
    loaderTL.fromTo( loader, .5, { y: '40', opacity: 0, delay: .30 }, { y: 0, opacity: 1, delay: .6, ease: Power2.easeOut } );
  };
  
  animateOut_2();
  
  btn.onclick = function() {
    animateIn();
    setTimeout(animateOut_2, 2000);
  };
  
})();