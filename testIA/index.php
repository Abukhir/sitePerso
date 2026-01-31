<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alexis Cardon</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
<?php include_once '/includes/include_nav.inc.php'?>
<button class="styled-button">
    Découvrir plus
    <div class="icon-container">
        <svg class="icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.83 14.829l5.339-5.34c0.378-0.378 0.586-0.88 0.586-1.414s-0.208-1.036-0.586-1.414c-0.378-0.379-0.88-0.586-1.414-0.586s-1.036 0.207-1.414 0.586l-7.545 7.546c-0.378 0.378-0.586 0.88-0.586 1.414s0.208 1.036 0.586 1.414l7.545 7.546c0.378 0.378 0.88 0.586 1.414 0.586s1.036-0.208 1.414-0.586c0.378-0.378 0.586-0.88 0.586-1.414s-0.208-1.036-0.586-1.414l-5.339-5.34z"></path>
        </svg>
    </div>
</button>
<script>
    document.querySelector('.styled-button').addEventListener('mouseenter', function() {
        this.querySelector('.icon').style.transform = 'translateX(5px)';
    });

    document.querySelector('.styled-button').addEventListener('mouseleave', function() {
        this.querySelector('.icon').style.transform = 'translateX(0)';
    });
</script>
</body>
</html>