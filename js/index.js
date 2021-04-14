// HOMEPAGE 
const tl = gsap.timeline({ defaults: {ease: 'power3.out'} }); //initializing a timeline
tl.from(".top-bar", {y: "-145%",  duration: 0.5});
tl.from(".homepage-column", {x: "-15%", opacity: 0,  duration: 0.5, stagger: 0.45});
tl.from(".animate", {x: "-15%", opacity: 0,  duration: 0.5, stagger: 0.5});