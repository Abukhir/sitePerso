<?php
// --- 1. Initialisation ---
$projet_id = null;
$projet_data = null;
$error_message = '';

// --- 2. Vérifier le paramètre GET ---
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $projet_id = $_GET['id'];

    // --- 3. Charger le JSON ---
    $json_file = @file_get_contents('projets.json');
    if ($json_file === false) {
        $error_message = "Erreur: Impossible de charger les données des projets.";
    } else {
        $projets = json_decode($json_file, true);

        // --- 4. Trouver le bon projet ---
        foreach ($projets as $projet) {
            if ($projet['id'] === $projet_id) {
                $projet_data = $projet;
                break;
            }
        }

        if ($projet_data === null) {
            $error_message = "Erreur: Projet non trouvé.";
        }
    }
} else {
    $error_message = "Erreur: Aucun projet spécifié.";
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($projet_data) ? htmlspecialchars($projet_data['title']) : 'Projet'; ?> - Alexis Cardon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/index.css"> <link rel="stylesheet" href="css/projet-detail.css"> </head>
<body>
<?php include_once 'includes/include_nav.inc.php'?>

<main class="projet-detail-container">

    <?php if ($projet_data): // Si le projet est trouvé, afficher les détails ?>

        <header class="projet-header">
            <span class="projet-category"><?php echo htmlspecialchars($projet_data['category']); ?></span>
            <h1><?php echo htmlspecialchars($projet_data['title']); ?></h1>
            <p class="projet-short-desc"><?php echo htmlspecialchars($projet_data['description']); ?></p>
            <div class="projet-tags">
                <?php foreach ($projet_data['tags'] as $tag): ?>
                    <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
            </div>
        </header>

        <div class="projet-main-image">
            <img src="<?php echo htmlspecialchars($projet_data['imageUrl']); ?>" alt="Image principale du projet <?php echo htmlspecialchars($projet_data['title']); ?>">
        </div>

        <div class="projet-content">
            <?php echo $projet_data['fullContent']; ?>
        </div>

    <?php else: // Si projet non trouvé ou ID manquant, afficher l'erreur ?>

        <div class="projet-error">
            <h1><?php echo $error_message; ?></h1>
            <p>Retournez à la page des projets pour continuer.</p>
            <a href="mes-projets.php" class="styled-button-primary" style="padding: 0.8rem 1.5rem;">Voir tous les projets</a>
        </div>

    <?php endif; ?>
</main>

<script src="js/nav.js"></script>
</body>
</html>