document.addEventListener('scroll', function() {
    const placeSection = document.getElementById('place');
    const clouds = document.querySelectorAll('.cloud');

    const sectionRect = placeSection.getBoundingClientRect();
    const viewportHeight = window.innerHeight;

    // Vérifie si la section est visible dans le viewport
    if (sectionRect.top < viewportHeight && sectionRect.bottom >= 0) {
        // Calcule la quantité de défilement pour ajuster la position des nuages
        const scrollY = window.scrollY; // Position de défilement vertical
        const sectionOffsetTop = sectionRect.top + scrollY; // Position de la section par rapport à la page
        const sectionHeight = placeSection.offsetHeight; // Hauteur de la section
        const scrollPercentage = (scrollY - sectionOffsetTop + viewportHeight) / (viewportHeight + sectionHeight); // Pourcentage de défilement dans la section

        // Applique le déplacement aux nuages
        clouds.forEach((cloud) => {
            // Déplace les nuages vers la gauche en fonction du pourcentage de défilement
            const translateX = -300 * scrollPercentage; // Ajuste le mouvement en fonction du défilement
            cloud.style.transform = `translateX(${translateX}px)`; // Applique la transformation
        });
    } /*else {
        // Réinitialiser les nuages si la section n'est pas visible
        clouds.forEach(cloud => {
            cloud.style.transform = `translateX(0px)`; // Remettre la position initiale
        });
    }*/
});


