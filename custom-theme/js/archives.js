// PAGE LOADING
const tl = gsap.timeline({ defaults: {ease: 'none'} }); //initializing a timeline

tl.from(".header--overlay", { opacity: 0, delay: 0.5,  duration: 0.5});
tl.from(".article__archive", {x:"-200%", opacity: 0,  duration: 0.1, stagger: 0.2});

