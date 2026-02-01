document.addEventListener('DOMContentLoaded', function() {

    const searchBar = document.getElementById('search-bar');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    const noResultsMessage = document.querySelector('.no-results-message');

    let activeFilter = 'all';
    let searchTerm = '';

    function filterProjects() {
        let visibleCount = 0;

        projectCards.forEach(card => {
            // On récupère la liste des tags stockée dans l'attribut data-tags
            // Ex: "montage,premiere pro,after effects"
            const cardTagsData = card.getAttribute('data-tags');
            const cardTags = cardTagsData ? cardTagsData.split(',') : [];

            const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
            const cardDesc = card.querySelector('p').textContent.toLowerCase();

            // LOGIQUE DE FILTRE MISE À JOUR :
            // Soit on veut "all", soit le filtre actif doit être inclus dans les tags du projet
            const matchesFilter = (activeFilter === 'all') || (cardTags.includes(activeFilter));

            const matchesSearch = (cardTitle.includes(searchTerm)) || (cardDesc.includes(searchTerm));

            if (matchesFilter && matchesSearch) {
                card.style.display = 'grid'; // Ou 'flex' selon ton CSS, 'grid' dans ton cas
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (visibleCount === 0) {
            noResultsMessage.style.display = 'block';
        } else {
            noResultsMessage.style.display = 'none';
        }
    }

    // Gestion de la recherche
    searchBar.addEventListener('input', (e) => {
        searchTerm = e.target.value.toLowerCase();
        filterProjects();
    });

    // Gestion des clics sur les filtres
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Gestion de l'état actif visuel
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Mise à jour du filtre actif (en minuscule pour correspondre aux data-tags)
            const rawFilter = button.getAttribute('data-filter');
            activeFilter = (rawFilter === 'all') ? 'all' : rawFilter.toLowerCase();

            filterProjects();
        });
    });

    // Gestion du filtre via URL (si tu cliques sur un tag depuis une autre page)
    const urlParams = new URLSearchParams(window.location.search);
    const filterParam = urlParams.get('filter');

    if (filterParam) {
        // On cherche le bouton qui a ce texte exact (insensible à la casse pour le paramètre URL)
        // Mais le data-filter dans le HTML PHP est exact (avec majuscules)
        const targetBtn = Array.from(filterButtons).find(btn =>
            btn.getAttribute('data-filter').toLowerCase() === filterParam.toLowerCase()
        );

        if (targetBtn) {
            targetBtn.click();
        }
    } else {
        // Lance le filtre initial
        filterProjects();
    }
});