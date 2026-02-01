<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation Admin - Alexis Cardon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/index.css">

    <style>
        /* Styles spécifiques pour la page de documentation */
        .doc-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 30px;
        }

        .doc-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .doc-header h1 {
            font-family: 'Montserrat', sans-serif;
            color: #2F3E46;
            font-size: 36px;
        }

        .doc-section {
            background-color: #CAD2C5;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 4px 12px rgba(47, 62, 70, 0.1);
        }

        .doc-section h2 {
            font-family: 'Montserrat', sans-serif;
            color: #354F52;
            border-bottom: 2px solid #84A98C;
            padding-bottom: 10px;
            margin-top: 0;
        }

        .doc-section h3 {
            font-family: 'Inter', sans-serif;
            color: #52796F;
            margin-top: 25px;
        }

        .doc-content p {
            font-family: 'Inter', sans-serif;
            color: #2F3E46;
            line-height: 1.6;
        }

        /* Boites de code */
        .code-block {
            background-color: #2F3E46;
            color: #E8EBE0;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            overflow-x: auto;
            margin: 15px 0;
            border-left: 5px solid #84A98C;
        }

        .inline-code {
            background-color: #E8EBE0;
            color: #D62828; /* Rouge pour ressortir */
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
            font-weight: bold;
        }

        .example-box {
            background-color: #E8EBE0;
            padding: 15px;
            border-radius: 8px;
            border: 1px dashed #52796F;
            margin-top: 10px;
        }

        .note {
            font-style: italic;
            font-size: 0.9em;
            color: #52796F;
        }
    </style>
</head>
<body>

<?php include_once 'includes/include_nav.inc.php'?>

<main class="doc-container">
    <header class="doc-header">
        <h1>Guide d'Administration</h1>
        <p>Référence technique pour la gestion du contenu du portfolio.</p>
    </header>

    <section class="doc-section">
        <h2>1. Formatage du Texte</h2>
        <p>Utilisez ces balises dans le champ <code>fullContent</code> de votre fichier JSON pour styliser le texte.</p>

        <h3>Mettre en Gras</h3>
        <p>Entourez le texte de deux astérisques.</p>
        <div class="code-block">**Ceci est un texte important**</div>
        <div class="example-box">Résultat : <strong>Ceci est un texte important</strong></div>

        <h3>Mettre en Italique</h3>
        <p>Entourez le texte d'un seul astérisque.</p>
        <div class="code-block">*Ceci est une note subtile*</div>
        <div class="example-box">Résultat : <em>Ceci est une note subtile</em></div>
    </section>

    <section class="doc-section">
        <h2>2. Système d'Insertion de Médias</h2>
        <p>C'est le système principal pour placer des images ou vidéos au milieu du texte.</p>

        <h3>Syntaxe de base</h3>
        <p>La balise se compose de 3 parties séparées par des deux-points <code>:</code>.</p>
        <div class="code-block">&lt;MEDIA:ID_DU_MEDIA:POSITION:TAILLE&gt;</div>

        <ul>
            <li><strong>ID_DU_MEDIA</strong> : L'identifiant défini dans la liste <code>media</code> du JSON (ex: <code>affiche-v1</code>).</li>
            <li><strong>POSITION</strong> (Optionnel) : <code>left</code>, <code>right</code> ou <code>center</code>. (Défaut: center)</li>
            <li><strong>TAILLE</strong> (Optionnel) : Un chiffre de 1 à 100 représentant le pourcentage de largeur. (Défaut: 100)</li>
        </ul>

        <h3>Exemples Concrets</h3>

        <p><strong>1. Image centrée (Défaut)</strong></p>
        <div class="code-block">&lt;MEDIA:mon-image&gt;</div>

        <p><strong>2. Image à gauche, texte à droite (Largeur 40%)</strong></p>
        <div class="code-block">&lt;MEDIA:mon-image:left:40&gt;</div>

        <p><strong>3. Vidéo centrée, pas trop large (Largeur 80%)</strong></p>
        <div class="code-block">&lt;MEDIA:ma-video:center:80&gt;</div>

        <p><strong>4. Image à droite, texte à gauche (Petite vignette 30%)</strong></p>
        <div class="code-block">&lt;MEDIA:illustration-2:right:30&gt;</div>
    </section>

    <section class="doc-section">
        <h2>3. Configuration JSON & Vidéos</h2>

        <h3>Structure d'un projet dans <code>projets.json</code></h3>
        <div class="code-block">
            {
            "id": "projet-unique",
            "title": "Titre du projet",
            "category": "Montage",
            "tags": ["Premiere Pro", "After Effects"],
            "imageUrl": "img/miniature.jpg",
            "description": "Courte description pour la carte.",
            "fullContent": "Texte complet avec les balises **gras** et &lt;MEDIA:id&gt;...",
            "media": [
            {
            "id": "image-1",
            "type": "image",
            "url": "img/projet1/img1.jpg",
            "alt": "Description image"
            },
            {
            "id": "video-finale",
            "type": "video",
            "url": "https://www.youtube-nocookie.com/embed/XXXXXX"
            }
            ]
            }
        </div>

        <h3>Rappel Important Vidéos</h3>
        <p>Pour les vidéos YouTube, utilisez toujours le format <strong>Embed</strong> et le domaine <strong>nocookie</strong> pour éviter les erreurs dans la console.</p>
        <p class="note">❌ Mauvais : https://youtu.be/VIDEO_ID</p>
        <p class="note">❌ Mauvais : https://www.youtube.com/watch?v=VIDEO_ID</p>
        <p>✅ <strong>Bon :</strong> <code>https://www.youtube-nocookie.com/embed/VIDEO_ID</code></p>
    </section>

    <div style="text-align: center; margin-top: 50px;">
        <a href="index.php">
            <button class="styled-button-secondary">Retour à l'accueil</button>
        </a>
    </div>

</main>

<script src="js/nav.js"></script>
</body>
</html>