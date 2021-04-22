// THIS WEEK PAGE ANIMATIONS
const tlweek = gsap.timeline({ defaults: {ease: 'power3.out', duration: 1}}); 

tlweek.from(".thisweek", {x: "-5%", opacity: 0, delay: 0.5});
tlweek.from(".article__thisweek", {y: "35%", opacity: 0});
tlweek.from(".thisweek-image", {x: "35%", opacity: 0});


