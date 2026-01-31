document.addEventListener('DOMContentLoaded', () => {
    // 1. Formatage Global (Gras/Italique)
    const textContainers = document.querySelectorAll('p, h1, h2, h3, li, .projet-content');
    textContainers.forEach(container => {
        let content = container.innerHTML;
        content = content.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
        content = content.replace(/(?<!\*)\*(?!\*)(.*?)(?<!\*)\*(?!\*)/g, '<em>$1</em>');
        container.innerHTML = content;
    });

    // 2. Gestion de la compatibilité tactile pour les animations
    document.querySelectorAll('[class^="styled-button"]').forEach(btn => {
        btn.addEventListener('touchstart', () => btn.classList.add('active'), {passive: true});
    });
});