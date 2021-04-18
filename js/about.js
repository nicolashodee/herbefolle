// TYPING EFFECT 

var wordList = ['de saison', 'savoureuse', 'en livraison', 'bio', ];
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