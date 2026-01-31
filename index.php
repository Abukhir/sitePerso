<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alexis Cardon - Aspirant Monteur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php include_once 'includes/include_nav.inc.php'?>

<section class="hero-section">
    <div class="section-content">
        <div class="section-title">
            <h1>Aspirant Monteur Vidéo & Créateur Multimédia</h1>
        </div>
        <div class="section-footer">
            <p>Actuellement <a href="experiences/arkana_production.php">Alternant chez Arkana Production</a> et étudiant en BUT MMI, spécialisé en post-production.</p>
            <a href="mes-projets.php">
                <button class="styled-button-secondary">
                    Découvrir mes projets
                    <div class="icon-container">
                        <svg id="Arrow-fPage" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" height="30px" width="30px" class="icon"><defs><linearGradient y2="100%" x2="100%" y1="0%" x1="0%" id="iconGradient"><stop style="stop-color:#E8EBE0;stop-opacity:1" offset="0%"></stop><stop style="stop-color:#CAD2C5;stop-opacity:1" offset="100%"></stop></linearGradient></defs><path fill="url(#iconGradient)" d="M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z"></path></svg>
                    </div>
                </button>
            </a>
        </div>
    </div>
</section>

<div id="me-container">
    <div class="image-container">
        <img src="img/placeholder.png" alt="Portrait Alexis Cardon">
    </div>
    <div class="me-content">
        <h2>Bonjour, je suis Alexis</h2>
        <p>Éternel assoiffé de création, je suis actuellement en 3ème année de BUT MMI à l'IUT de Chambéry, tout en étant <a href="experiences/arkana_production.php">alternant chez Arkana Production</a>.</p>
        <p>Passionné par l'art de raconter des histoires, je me spécialise en **post-production vidéo** (montage, étalonnage, motion design), mais ma formation m'apporte également de solides compétences en design d'interface et en développement web.</p>
        <a href="doc/cv-alexis-cardon.pdf" target="_blank">
            <button class="styled-button-primary">
                Télécharger mon CV
                <div class="inner-button">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="18px" width="18px"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                </div>
            </button>
        </a>
    </div>
</div>

<section id="skills-section">
    <h2>Ce que je fais</h2>
    <div class="skills-grid">
        <div class="skill-card">
            <h3>Montage & Post-production</h3>
            <p>Ma compétence principale. Je maîtrise le rythme, la narration visuelle et la technique sur des logiciels comme **Premiere Pro**, **After Effects** et **DaVinci Resolve**.</p>
        </div>
        <div class="skill-card">
            <h3>Design UI/UX & Graphisme</h3>
            <p>De la conception d'interfaces sur **Figma** à la création d'identités visuelles sur **Illustrator** ou **Photoshop**, je conçois des expériences utilisateur centrées et esthétiques.</p>
        </div>
        <div class="skill-card">
            <h3>Développement Web</h3>
            <p>Je suis capable de créer des sites web responsives et dynamiques. Je maîtrise **HTML**, **CSS**, **JavaScript** et j'ai de bonnes bases en **PHP** et **SQL**.</p>
        </div>
    </div>
</section>

<section id="featured-projects">
    <h2>Projets Récents</h2>
    <p class="projects-subtitle">Un aperçu de mon travail en montage, design et développement.</p>

    <div class="project-grid">
        <div class="project-card" data-category="montage">
            <div class="card-image">
                <img src="img/placeholder.png" alt="Image placeholder pour L'Écho">
            </div>
            <div class="card-content">
                <span class="card-tag">Montage</span>
                <h3 class="card-title">Court-Métrage "L'Écho"</h3>
                <p>Réalisation et montage d'un court-métrage de fiction, gestion de la post-production.</p>
                <a href="projet.php?id=projet-echo" class="styled-button-primary" style="padding: 0.8rem 1.5rem;">Voir plus</a>
            </div>
        </div>
        <div class="project-card" data-category="design">
            <div class="card-image">
                <img src="img/placeholder.png" alt="Image placeholder pour Maquette Connect">
            </div>
            <div class="card-content">
                <span class="card-tag" style="background-color: #354F52;">Design</span>
                <h3 class="card-title">Maquette UI/UX "Connect"</h3>
                <p>Conception d'une maquette d'application mobile sur Figma, focus sur l'expérience utilisateur.</p>
                <a href="projet.php?id=projet-connect" class="styled-button-primary" style="padding: 0.8rem 1.5rem;">Voir plus</a>
            </div>
        </div>
        <div class="project-card" data-category="developpement">
            <div class="card-image">
                <img src="img/placeholder.png" alt="Image placeholder pour le Portfolio">
            </div>
            <div class="card-content">
                <span class="card-tag" style="background-color: #52796F;">Développement</span>
                <h3 class="card-title">Site Web Portfolio</h3>
                <p>Création de ce portfolio en PHP, CSS et JavaScript, en mettant l'accent sur la responsivité.</p>
                <a href="projet.php?id=projet-portfolio" class="styled-button-primary" style="padding: 0.8rem 1.5rem;">Voir plus</a>
            </div>
        </div>
    </div>

    <div class="all-projects-link">
        <a href="mes-projets.php">
            <button class="styled-button-secondary">
                Voir tous mes projets
                <div class="icon-container">
                    <svg id="Arrow-fPage-2" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" height="30px" width="30px" class="icon"><path fill="url(#iconGradient)" d="M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z"></path></svg>
                </div>
            </button>
        </a>
    </div>
</section>

<section id="contact-cta">
    <h2>Travaillons ensemble</h2>
    <p>Je suis actuellement à la recherche d'un master dans le secteur de la création audiovisuel pour septembre 2026 !</p>
    <a href="me-contacter.php">
        <button class="styled-button-secondary">
            Me contacter
            <div class="icon-container">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="18px" width="18px"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
        </button>
    </a>
</section>

<script src="js/main.js"></script>
<script src="js/nav.js"></script>
</body>
</html>