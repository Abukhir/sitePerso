document.querySelector('.styled-button').addEventListener('mouseenter', function() {
    this.querySelector('.icon').style.transform = 'translateX(5px)';
});

document.querySelector('.styled-button').addEventListener('mouseleave', function() {
    this.querySelector('.icon').style.transform = 'translateX(0)';
});