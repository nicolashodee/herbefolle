// THIS WEEK PAGE ANIMATIONS
const tl = gsap.timeline({ defaults: {ease: 'power3.out', duration: 1}}); 

// tl.from(".container", {y:"100%"});
// tl.from(".header__thisweek", {y: "-100%"});
tl.from(".thisweek", {x: "-5%", opacity: 0, delay: 0.5});
tl.from(".article__thisweek", {y: "35%", opacity: 0});
tl.from(".thisweek-image", {x: "35%", opacity: 0});


