/*document.querySelector('.styled-button').addEventListener('mouseenter', function() {
    this.querySelector('.icon').style.transform = 'translateX(5px)';
});

document.querySelector('.styled-button').addEventListener('mouseleave', function() {
    this.querySelector('.icon').style.transform = 'translateX(0)';
}); */

document.querySelectorAll('.styled-button-primary, .styled-button-secondary').forEach(button => {
    button.addEventListener('touchstart', () => {
        // Force l'état hover sur mobile/Safari
        button.classList.add('hover');
    }, {passive: true});
});

// Lecture des fichiers et ajout de gras et italique
document.addEventListener('DOMContentLoaded', () => {
    const containers = document.querySelectorAll('p, h1, h2, h3, li, .projet-content');

    containers.forEach(container => {
        let content = container.innerHTML;

        // 1. Support du gras : **texte** -> <strong>texte</strong>
        content = content.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

        // 2. Support de l'italique : *texte* -> <em>texte</em>
        // On utilise une regex qui exclut les doubles astérisques déjà traités
        content = content.replace(/(?<!\*)\*(?!\*)(.*?)(?<!\*)\*(?!\*)/g, '<em>$1</em>');

        container.innerHTML = content;
    });
});