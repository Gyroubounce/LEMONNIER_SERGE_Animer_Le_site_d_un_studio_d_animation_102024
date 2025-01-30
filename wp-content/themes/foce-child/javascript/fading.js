document.addEventListener("DOMContentLoaded", function() {
    const img = document.querySelector('.image-container img'); // Sélectionner l'image dans image-container

    // Fonction pour obtenir la position de départ
    function getStartPosition() {
        const rect = img.getBoundingClientRect();
        return { top: rect.top, left: rect.left };
    }

    // Animation de la classe visible
    function addVisibleClass() {
        const sections = document.querySelectorAll('section');
        const footer = document.querySelector('footer');
        const banner = document.querySelector('.banner');

        sections.forEach((section) => {
            section.classList.add('visible');
        });
        
        footer.classList.add('visible');
        banner.classList.add('visible');

        // Appliquer la classe visible à l'image pour la faire monter
        if (img) {
            img.classList.add('visible'); // Ajouter la classe visible pour faire monter l'image

            // Ajouter l'animation de flottement après un petit délai pour assurer que le logo a bien fini de monter
            setTimeout(() => {
                img.classList.add('floating'); // Appliquer l'animation de flottement
            }, 800); // Délai de 0.8s, correspondant à la durée de la transition pour la montée
        }
    }

    // Appeler la fonction d'animation au chargement de la page
    addVisibleClass();
});
