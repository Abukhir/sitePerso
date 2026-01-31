const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    console.log("burger fonction called")
    if (burger && nav) {
        burger.addEventListener('click', () => {
            // Basculer le menu
            nav.classList.toggle('nav-active');
            console.log("nav-active triggered")
            // Animation du Burger
            burger.classList.toggle('toggle');
        });
    }
}

// Appeler la fonction
navSlide();