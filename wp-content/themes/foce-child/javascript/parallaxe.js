document.addEventListener("scroll", function() {
    const img = document.querySelector('.image-container img'); // Sélectionner l'image dans l'image-container
    const bannerSection = document.querySelector('.banner'); // Sélectionner la section banner
    const imgHeight = img.offsetHeight; // Hauteur de l'image
    const sectionHeight = bannerSection.offsetHeight; // Hauteur de la section


    // Afficher la hauteur du logo dans la console
    console.log('Hauteur du logo:', imgHeight); // Console log pour la hauteur du logo

    // Ajouter la classe floating pour l'animation initiale
    img.classList.add('floating');

    // Initialiser la translation du logo
    let translateY = 0;
    const scrollThreshold = 0; // Seuil de défilement pour commencer à déplacer le logo

       // Fonction pour gérer la montée du logo
       function handleScrollUp(scrollY) {
        // Calculer la distance de défilement
        const scrollDistance = 800 - scrollY; // Distance de défilement
        const percentage = scrollDistance / 800; // Pourcentage de défilement par rapport à 600

        // Calculer la translation Y en utilisant le ratio de 3:1
        const translateDistance = percentage * (800 / 3); // Chaque 3px de défilement = 1px de mouvement
        translateY = Math.max(183 - translateDistance, 0); // Position finale du logo ne doit pas descendre en dessous de 0

        img.classList.remove('floating'); // Retirer la classe d'animation
    }

    // Fonction pour gérer la descente du logo
    function handleScrollDown(scrollY) {
        // Calculer le pourcentage de défilement
        const scrollStart = scrollThreshold; // 183
        const scrollEnd = 800; // 800
        const percentage = (scrollY - scrollStart) / (scrollEnd - scrollStart); // Pourcentage de défilement entre le seuil et 800
        translateY = Math.min(183 * percentage, 183); // TranslateY de 0 à 183 (ne pas dépasser 183)
    }

    // Fonction pour maintenir le logo à la position de 183px
    function keepLogoAt183() {
        translateY = 183; // Garder le logo en bas à 183px
    }

    // Fonction de parallaxe pour ajuster la position du logo au défilement
    function parallaxEffect() {
        const scrollY = window.scrollY; // Position de défilement vertical
        console.log('scrollY:', scrollY); // Afficher la valeur de scrollY dans la console
        const sectionRect = bannerSection.getBoundingClientRect(); // Obtenir la position de la section banner
        const viewportHeight = window.innerHeight; // Hauteur de la fenêtre

        // Vérifie si la section est visible dans le viewport
        if (sectionRect.top < viewportHeight && sectionRect.bottom >= 0) {
            if (scrollY < scrollThreshold) {
                // Ne rien faire si le défilement est en dessous du seuil
                translateY = 0; // Position initiale
                img.classList.add('floating'); // Retirer la classe si translateY n'est pas à 0
            } else if (scrollY >= scrollThreshold && scrollY < 800) {
                handleScrollDown(scrollY); // Appeler la fonction de descente
            } else {
                keepLogoAt183(); // Garder le logo à 183px
            }

            // Ajuste la position du logo sans transition pour un changement instantané
            img.style.transform = `translateY(${translateY}px)`; // Ajuste la position
            console.log('translateY:', translateY); // Afficher la valeur de translateY dans la cons
            // Retirer la classe floating uniquement si le logo n'est pas en position initiale
            if (translateY !== 0) {
                img.classList.remove('floating');
            }
        } else {
            // Si on est en haut de la page (scrollY est à 0)
            if (translateY === 0) {
                img.classList.add('floating'); // Réajouter la classe floating si le logo est à sa position initiale
            } else {
                img.classList.remove('floating'); // Retirer la classe si translateY n'est pas à 0
            }
        }
    }
            // Appliquer une transition fluide
            img.style.transition = 'transform 0.1s linear'; // Ajustez la durée pour obtenir la vitesse désirée
            img.style.transform = `translateY(${translateY}px)`; // Ajuste la position
            
    // Attacher l'effet parallaxe à l'événement de scroll
    window.addEventListener('scroll', parallaxEffect);
});
