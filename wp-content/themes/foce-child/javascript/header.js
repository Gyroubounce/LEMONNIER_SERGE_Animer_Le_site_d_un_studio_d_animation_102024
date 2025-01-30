// Sélectionner le bouton menu burger, le menu et les liens du menu
const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('ul'); // Assurez-vous que cela cible votre menu
const menuLinks = document.querySelectorAll('ul li a'); // Sélectionner tous les liens du menu

// Sélectionner les éléments à afficher/masquer
const imageGauche = document.querySelector('.image-gauche');
const imageDroite = document.querySelector('.image-droite');

// Initialiser l'état du menu
let isOpen = false;

// Fonction pour basculer l'état du menu
function toggleMenu() {
    isOpen = !isOpen;

    // Basculer la classe 'open' pour le bouton burger
    menuToggle.classList.toggle('open', isOpen);

    // Afficher ou cacher le menu
    if (isOpen) {
        menu.classList.add('open'); // Ajoute la classe 'open' au menu
        imageGauche.classList.add('open'); // Affiche les éléments à gauche
        imageDroite.classList.add('open'); // Affiche les éléments à droite

               // Désactiver le défilement de la page
               document.body.style.paddingRight = `${scrollBarWidth}px`;
               document.body.classList.add('no-scroll'); // Ajouter la classe pour désactiver le défilement
    } else {
        menu.classList.remove('open'); // Retire la classe 'open' du menu
        imageGauche.classList.remove('open'); // Cache les éléments à gauche
        imageDroite.classList.remove('open'); // Cache les éléments à droite

               // Réactiver le défilement de la page
               document.body.classList.remove('no-scroll'); // Retirer la classe pour réactiver le défilement
    }
}

// Ajouter un écouteur d'événement au bouton menu toggle
menuToggle.addEventListener('click', toggleMenu);

// Fonction pour fermer le menu après avoir cliqué sur un lien
function closeMenu() {
    if (isOpen) {
        toggleMenu(); // Appeler la fonction pour fermer le menu
    }
}

// Ajouter l'événement 'click' à chaque lien de menu
menuLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
});

function setMenuHeight() {
    const menuHeight = window.innerHeight; // Obtient la hauteur de la fenêtre
    const minHeight = 300; // Définir une hauteur minimale (en pixels)

    // Ajuster la hauteur du menu en fonction de la taille de la fenêtre, mais ne jamais descendre en dessous de minHeight
    menu.style.height = `${Math.max(menuHeight, minHeight)}px`; 
}

// Écouter les changements de taille de la fenêtre
window.addEventListener('resize', setMenuHeight);

// Initialiser la hauteur au chargement
setMenuHeight();

