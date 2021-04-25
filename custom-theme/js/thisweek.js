console.log("thisweek.js loaded");
// ------------ THIS WEEK PAGE ANIMATIONS ---------- //
const tlWeek = gsap.timeline({ defaults: {ease: 'power3.out', duration: 1}}); 

tlWeek.from(".thisweek", {x: "-5%", opacity: 0, delay: 0.5});
tlWeek.from(".article__thisweek", {y: "35%", opacity: 0});
tlWeek.from(".thisweek-image", {x: "35%", opacity: 0});


