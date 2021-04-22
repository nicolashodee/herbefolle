// ----------- PAGE ANIMATIONS ------------- //

const tlArchives = gsap.timeline({ defaults: {ease: 'none'} }); 

tlArchives.from(".header--overlay", { opacity: 0, delay: 0.5,  duration: 0.5});
tlArchives.from(".article__archive", {x:"-200%", opacity: 0,  duration: 0.1, stagger: 0.2});

