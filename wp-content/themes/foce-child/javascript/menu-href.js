document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.link');

    // Fonction pour animer les liens avec un délai
    function animateLinks() {
        links.forEach((link, index) => {
            setTimeout(() => {
                link.classList.add('slideIn'); // Ajouter la classe d'animation
            }, index * 300); // Délai de 200ms pour chaque lien
        });
    }

    // Écoutez l'événement de clic sur le bouton du menu pour déclencher l'animation
    const menuToggle = document.querySelector('.menu-toggle');
    menuToggle.addEventListener('click', animateLinks);
});
