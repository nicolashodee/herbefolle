const titles = gsap.utils.toArray('.buy__left');
titles.forEach(title => {
  const anim = gsap.from(title, { ease: Power2. easeOut, y: 80, paused: true, });
  
  ScrollTrigger.create({
    trigger: title,
    start: "top 90%",
    onEnter: () => anim.play()
  });
  
  ScrollTrigger.create({
    trigger: title,
    start: "top 80%",
    onLeaveBack: () => anim.reverse()
  });
});