<?php
// --- 1. Initialisation ---
$projets = [];
$categories = [];
$json_file = @file_get_contents('projets.json'); // Utilise le JSON à la racine

// --- 2. Charger et préparer les données ---
if ($json_file !== false) {
    $projets_data = json_decode($json_file, true);

    // S'assurer que le JSON est valide et non vide
    if (is_array($projets_data)) {
        $projets = $projets_data;

        // --- 3. Extraire les catégories uniques ---
        // array_column prend la colonne 'category' de tous les projets
        $temp_categories = array_column($projets, 'category');
        // array_unique retire les doublons
        $categories = array_unique($temp_categories);
        sort($categories); // Trie les catégories par ordre alphabétique
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes Projets - Alexis Cardon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/projets.css">
</head>
<body>
<?php include_once 'includes/include_nav.inc.php'?>

<main class="projets-container">
    <header class="projets-header">
        <h1>Mes Projets</h1>
        <p>Une sélection de travaux réalisés durant mon BUT MMI et mon alternance.</p>
    </header>

    <div class="project-controls">
        <div class="filter-group">
            <button class="filter-btn active" data-filter="all">Tous</button>

            <?php foreach ($categories as $category): ?>
                <button class="filter-btn" data-filter="<?php echo htmlspecialchars($category); ?>">
                    <?php echo htmlspecialchars($category); ?>
                </button>
            <?php endforeach; ?>

        </div>
        <div class="search-wrapper">
            <input type="search" id="search-bar" placeholder="Rechercher un projet...">
        </div>
    </div>

    <div class="project-grid">

        <?php if (empty($projets)): ?>
            <div class="no-results-message" style="display: block; grid-column: 1 / -1;">
                <h3>Erreur de chargement</h3>
                <p>Impossible de charger les projets depuis le fichier JSON.</p>
            </div>
        <?php else: ?>
            <?php foreach ($projets as $projet): ?>
                <div class="project-card" data-category="<?php echo htmlspecialchars($projet['category']); ?>">
                    <div class="card-image">
                        <img src="<?php echo htmlspecialchars($projet['imageUrl']); ?>" alt="Image pour <?php echo htmlspecialchars($projet['title']); ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-tag"><?php echo htmlspecialchars($projet['category']); ?></span>
                        <h3 class="card-title"><?php echo htmlspecialchars($projet['title']); ?></h3>
                        <p><?php echo htmlspecialchars($projet['description']); ?></p>
                        <a href="projet.php?id=<?php echo htmlspecialchars($projet['id']); ?>" class="styled-button-primary" style="padding: 0.8rem 1.5rem;">Voir plus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

    <div class="no-results-message" style="display: none;">
        <h3>Aucun projet trouvé</h3>
        <p>Essayez d'ajuster vos filtres ou votre recherche.</p>
    </div>
</main>

<script src="js/nav.js"></script>
<script src="js/projets.js"></script>
</body>
</html>