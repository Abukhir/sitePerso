<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Me Contacter - Alexis Cardon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/index.css"> <link rel="stylesheet" href="css/contact.css"> </head>
<body>
<?php include_once 'includes/include_nav.inc.php'?>

<main class="contact-container">
    <header class="contact-header">
        <h1>Me contacter</h1>
        <p>Une question, une proposition de projet ou simplement envie de discuter ? N'hésitez pas à m'envoyer un message.</p>
    </header>

    <div class="contact-content">
        <div class="contact-form-wrapper">
            <form action="#" method="POST"> <div class="form-group">
                    <label for="name">Votre Nom</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Votre Message</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>
                <button type="submit" class="styled-button-primary">
                    Envoyer le message
                    <div class="inner-button">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" height="18px" width="18px"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </div>
                </button>
            </form>
        </div>

        <div class="contact-info">
            <h3>Informations</h3>
            <p>Vous préférez un contact direct ? Voici mon adresse mail professionnelle.</p>

            <div class="info-item">
                <strong>Email</strong>
                <a href="mailto:contact@alexis-cardon.fr">contact@alexis-cardon.fr</a>
            </div>

            <div class="info-item">
                <strong>Mon CV</strong>
                <a href="doc/cv-alexis-cardon.pdf" target="_blank">Télécharger mon CV (PDF)</a>
            </div>
            <div class="info-item">
                <strong>Localisation</strong>
                <p>Grenoble, France</p>
                <p>Mobile pour opportunités</p>
            </div>
        </div>
    </div>
    </div>
</main>

<script src="js/nav.js"></script>
</body>
</html>