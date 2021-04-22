console.log("index.js is loaded");
// ------------ HOMEPAGE ANIMATIONS ---------- //

const tlHome = gsap.timeline({ defaults: {ease: 'power3.out'} });

tlHome.from("nav", {y: "-145%",  duration: 0.5});
tlHome.from(".homepage-column", {x: "-35%", opacity: 0,  duration: 1, stagger: 0.2});
tlHome.from(".animate", {x: "-15%", opacity: 0,  duration: 0.5, stagger: 0.5});
tlHome.from("#F", {rotation: "380", scale: 1,  duration: 2,  ease: "elastic.out(1, 0.3)", });





