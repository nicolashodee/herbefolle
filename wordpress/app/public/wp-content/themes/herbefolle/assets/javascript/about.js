console.log("about.js is loaded");

//---------------- TYPING EFFECT-------------- //
const tlAbout = gsap.timeline({ defaults: {ease: 'none'} }); 

tlAbout.from(".header--overlay", { opacity: 0, delay: 0.5,  duration: 0.5});
tlAbout.from(".animate-about", {y:"-10%", opacity: 0,  duration: 0.3, stagger: 0.2});

//---------------- TYPING EFFECT-------------- //

var wordList = ['de saison', 'savoureuse', 'livrée chez vous', 'saine et biologique', ];
var characterPosition = 0, wordPosition = 0;
var typeSpeed = 180, eraseSpeed = typeSpeed/2;

function typeWord() {
  if (characterPosition < wordList[wordPosition].length) {
    document.getElementById("text").innerHTML += wordList[wordPosition].charAt(characterPosition);
    characterPosition++;
    setTimeout(typeWord, typeSpeed);
  } else {
  	setTimeout(eraseWord, eraseSpeed);
  }
}

function eraseWord() {
	if (characterPosition >= 0) {
      var word = wordList[wordPosition].toString().substring(0, characterPosition);
      document.getElementById("text").innerHTML = word;
      characterPosition--;
      setTimeout(eraseWord, eraseSpeed);
  } else {
    wordPosition++;
    if (wordPosition >= wordList.length) wordPosition = 0;
    setTimeout(typeWord, typeSpeed);
  }
}

setTimeout(typeWord, 2000) ;

//---------------- PAGE ANIMATIONS -------------- //

//----- BLOCKS COMING FROM THE RIGHT ----------//
const leftBlocks = gsap.utils.toArray('.anim-left');

leftBlocks.forEach(block => {
  const animLeft = gsap.from(block, { ease: Power2. easeOut, x: 80, opacity: 0, paused: true});

  ScrollTrigger.create({
    trigger: block,
    start: "top 50%",
    onEnter: () => animLeft.play()
  });
  
  ScrollTrigger.create({
    trigger: block,
    start: "top 50%",
    onLeaveBack: () => animLeft.reverse()
  });
});

//----- BLOCKS COMING FROM THE LEFT ----------//
const rightBlocks = gsap.utils.toArray('.anim-right');

rightBlocks.forEach(block => {
  const animRight = gsap.from(block, { ease: Power2. easeOut, x: -80, opacity: 0, paused: true});
  
  ScrollTrigger.create({
    trigger: block,
    start: "top 80%",
    onEnter: () => animRight.play()
  });
  
  ScrollTrigger.create({
    trigger: block,
    start: "top 80%",
    onLeaveBack: () => animRight.reverse()
  });
});