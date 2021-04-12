//NEW NAV BAR

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

// TYPING EFFECT 

var wordList = ['à la pause dej', '', 'chez soi', 'en livraison'];
var characterPosition = 0, wordPosition = 0;
var typeSpeed = 200, eraseSpeed = typeSpeed/2;

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

setTimeout(typeWord, typeSpeed);

// INTRO EFFECT 

const tl = gsap.timeline({ defaults: {ease: 'power1.out'} }); //initializing a timeline

tl.to(".text", {y: "0%", duration: 1, stagger: 0.25});
tl.to(".slider", {y: "-100%", duration: 1.5, delay: 0.5}); 
tl.to(".homepage-intro", {y: "-100%", duration: 1}, "-=1")
