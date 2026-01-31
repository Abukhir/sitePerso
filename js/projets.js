document.addEventListener('DOMContentLoaded', function() {

    // Sélection des éléments
    const searchBar = document.getElementById('search-bar');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    // AJOUTER : Sélectionner le message d'erreur
    const noResultsMessage = document.querySelector('.no-results-message');

    let activeFilter = 'all';
    let searchTerm = '';

    // Fonction principale pour filtrer
    function filterProjects() {
        // AJOUTER : Compteur de projets visibles
        let visibleCount = 0;

        projectCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
            const cardDesc = card.querySelector('p').textContent.toLowerCase();

            const matchesFilter = (activeFilter === 'all') || (cardCategory === activeFilter);
            const matchesSearch = (cardTitle.includes(searchTerm)) || (cardDesc.includes(searchTerm));

            if (matchesFilter && matchesSearch) {
                card.style.display = 'grid';
                // AJOUTER : Incrémenter le compteur
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // AJOUTER : Logique d'affichage du message
        if (visibleCount === 0) {
            noResultsMessage.style.display = 'block';
        } else {
            noResultsMessage.style.display = 'none';
        }
    }

    // Écouteur d'événement pour la barre de recherche
    searchBar.addEventListener('input', (e) => {
        searchTerm = e.target.value.toLowerCase();
        filterProjects();
    });

    // Écouteur d'événement pour les boutons de filtre
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            activeFilter = button.getAttribute('data-filter');
            filterProjects();
        });
    });

    // Filtre initial
    filterProjects();
});