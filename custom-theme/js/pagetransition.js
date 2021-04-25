//------------- PAGE TRANSITION EFFECT ----------- //
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
  
  btn.onclick = function() {
    animateIn();
    setTimeout(animateOut_2, 2000);
  };
  
})();