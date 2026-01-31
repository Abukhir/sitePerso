document.querySelector('.styled-button').addEventListener('mouseenter', function() {
    this.querySelector('.icon').style.transform = 'translateX(5px)';
});

document.querySelector('.styled-button').addEventListener('mouseleave', function() {
    this.querySelector('.icon').style.transform = 'translateX(0)';
});

document.querySelectorAll('.styled-button-primary, .styled-button-secondary').forEach(button => {
    button.addEventListener('touchstart', () => {
        // Force l'état hover sur mobile/Safari
        button.classList.add('hover');
    }, {passive: true});
});