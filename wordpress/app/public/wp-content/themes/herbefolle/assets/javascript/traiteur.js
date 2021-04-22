// ------------ ESPACE TRAITEUR PAGE ANIMATIONS ---------- //
const tlTraiteur = gsap.timeline({ defaults: {ease: 'power3.out'} }); 

tlTraiteur.from("#traiteur", {x: "-145%", opacity: 0,  duration: 1});
tlTraiteur.from(".traiteur-element", {x: "-15%", opacity: 0,  duration: 1, stagger: 0.5}, "-=1");
tlTraiteur.from(".basket", {y: "100%", opacity: 0,  duration: 1});
tlTraiteur.from(".traiteur-button", {x: "-15%", opacity: 0,  duration: 0.5}, );
