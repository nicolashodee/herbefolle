console.log("brunch.js is loaded"); 

// ------------ PAGES ANIMATIONS ---------- //
const tlBrunch = gsap.timeline({ defaults: {ease: 'none'} }); 

tlBrunch.from(".header--overlay", { opacity: 0, delay: 0.5,  duration: 0.5});
tlBrunch.from(".animate-brunch", {x:"-10%", opacity: 0,  duration: 0.3, stagger: 0.2});


const titles = gsap.utils.toArray('.brunch__left');
titles.forEach(title => {
  const anim = gsap.from(title, { ease: Power2. easeOut, y: 80, opacity: 0, paused: true, delay: 1.5});
  
  ScrollTrigger.create({
    trigger: title,
    start: "top 80%",
    onEnter: () => anim.play()
  });
  
  ScrollTrigger.create({
    trigger: title,
    start: "top 80%",
    onLeaveBack: () => anim.reverse()
  });
});

const blocks = gsap.utils.toArray('.brunch__section');
blocks.forEach(block => {
  const anim = gsap.from(block, { ease: Power2. easeOut, duration: 1, y: 50, opacity: 0, paused: true });
  
  ScrollTrigger.create({
    trigger: block,
    start: "top 80%",
    onEnter: () => anim.play()
  });
  
  ScrollTrigger.create({
    trigger: block,
    start: "top 90%",
    onLeaveBack: () => anim.reverse()
  });
});