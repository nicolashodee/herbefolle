console.log("buy.js is loaded");
// ------------ PAGE ANIMATIONS ---------- //

const tlBuy = gsap.timeline({ defaults: {ease: 'none'} }); 

tlBuy.from(".header--overlay", { opacity: 0, delay: 0.5,  duration: 0.5});
tlBuy.from(".animate-buy", {y:"-10%", opacity: 0,  duration: 0.3, stagger: 0.2});


const titles = gsap.utils.toArray('.buy__left');
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

// ------------ PAGE ANIMATIONS ---------- //

const blocks = gsap.utils.toArray('.buy__section');
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

