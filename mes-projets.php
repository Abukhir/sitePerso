<?php
$projets = [];
$filtres = []; // Anciennement $categories
$json_file = @file_get_contents('projets.json');

// --- 2. Charger et préparer les données ---
if ($json_file !== false) {
    $projets_data = json_decode($json_file, true);

    if (is_array($projets_data)) {
        $projets = $projets_data;

        // --- 3. Extraire TOUS les filtres (Catégories + Tags) ---
        $temp_filtres = [];

        foreach ($projets as $p) {
            // Ajouter la catégorie principale
            if (isset($p['category'])) {
                $temp_filtres[] = $p['category'];
            }
            // Ajouter tous les tags individuels
            if (isset($p['tags']) && is_array($p['tags'])) {
                foreach ($p['tags'] as $tag) {
                    $temp_filtres[] = $tag;
                }
            }
        }

        // Retirer les doublons et trier
        $filtres = array_unique($temp_filtres);
        sort($filtres);
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
        <p>Une sélection de travaux réalisés durant mon BUT MMI, mon alternance, et mes projets personnels</p>
    </header>

    <div class="project-controls">
        <div class="filter-group">
            <button class="filter-btn active" data-filter="all">Tous</button>

            <?php foreach ($filtres as $filtre): ?>
                <button class="filter-btn" data-filter="<?php echo htmlspecialchars($filtre); ?>">
                    <?php echo htmlspecialchars($filtre); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="search-wrapper">
            <input type="search" id="search-bar" placeholder="Rechercher un projet...">
        </div>
    </div>

    <div class="project-grid">
        <?php if (empty($projets)): ?>
        <?php else: ?>
            <?php foreach ($projets as $projet): ?>
                <?php
                // Préparation des données pour le filtrage JS
                // On combine catégorie et tags dans une chaîne séparée par des virgules
                $tagsList = isset($projet['tags']) ? $projet['tags'] : [];
                if (isset($projet['category'])) {
                    array_unshift($tagsList, $projet['category']);
                }
                // On met tout en minuscule pour faciliter la comparaison JS
                $dataTags = strtolower(implode(',', $tagsList));
                ?>

                <div class="project-card" data-tags="<?php echo htmlspecialchars($dataTags); ?>">
                    <div class="card-image">
                        <img src="<?php echo htmlspecialchars($projet['imageUrl']); ?>" alt="<?php echo htmlspecialchars($projet['title']); ?>">
                    </div>
                    <div class="card-content">
                        <div class="card-tags">
                            <?php
                            foreach ($projet['tags'] as $tag) {
                                echo '<span class="card-tag">'.$tag.'</span>';
                            }
                            ?>
                        </div>
                        <h3 class="card-title"><?php echo htmlspecialchars($projet['title']); ?></h3>
                        <p><?php echo htmlspecialchars($projet['description']); ?></p>
                        <a href="projet.php?id=<?php echo htmlspecialchars($projet['id']); ?>" class="styled-button-primary">Voir plus</a>
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