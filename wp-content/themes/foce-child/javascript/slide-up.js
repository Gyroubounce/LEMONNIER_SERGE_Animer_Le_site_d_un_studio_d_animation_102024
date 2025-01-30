document.addEventListener('scroll', function() {
  const titles = document.getElementsByClassName('title-text');
  const texts = document.getElementsByClassName('title-text1');
  const h3Titles = document.getElementsByClassName('title-text-h3'); // Titres h3
  
  // Appliquer l'animation sur scroll pour la classe title-text
  Array.from(titles).forEach((word, index) => {
      const rect = word.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom >= 0) {
          // Utiliser setTimeout pour appliquer la classe avec un délai
          setTimeout(() => {
              word.classList.add('slideUp');
          }, index * 100); // Délai pour chaque mot
      } else {
          word.classList.remove('slideUp');
      }
  });

 // Appliquer l'animation sur scroll pour la classe title-text
 Array.from(h3Titles).forEach((word, index) => {
    const rect = word.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom >= 0) {
        // Utiliser setTimeout pour appliquer la classe avec un délai
        setTimeout(() => {
            word.classList.add('slideUp');
        }, index * 100); // Délai pour chaque mot
    } else {
        word.classList.remove('slideUp');
    }
});


  // Appliquer l'animation sur scroll pour la classe title-text1
  Array.from(texts).forEach((word, index) => {
      const rect = word.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom >= 0) {
          setTimeout(() => {
              word.classList.add('growUp');
          }, index * 200);
      } else {
          word.classList.remove('growUp');
      }
  });

});
