// HOMEPAGE 
const tl = gsap.timeline({ defaults: {ease: 'power3.out'} }); //initializing a timeline
tl.from("nav", {y: "-145%",  duration: 0.5});
tl.from(".homepage-column", {x: "-35%", opacity: 0,  duration: 1, stagger: 0.2});
tl.from(".animate", {x: "-15%", opacity: 0,  duration: 0.5, stagger: 0.5});

tl.to("#F", {rotation: "+35", scale: 1,  duration: 1,  ease: "elastic.out(1, 0.3)", });
tl.from("#L1", {rotation: "-10", scale: 1,  duration: 0.4,  ease: "elastic.out(1, 0.3)", });
tl.from("#L2", {rotation: "10", scale: 1,  duration: 0.4,  ease: "elastic.out(1, 0.3)", });
tl.from("#E", {rotation: "-10", scale: 1,  duration: 0.4,  ease: "elastic.out(1, 0.3)", });
tl.from("#F", {rotation: "380", scale: 0.8,  duration: 5,  ease: "elastic.out(1, 0.3)", });


