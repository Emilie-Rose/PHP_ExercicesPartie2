<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 4</h2>
    <p style="color:#8080FF">Initialisez une variable à 1. Tant que cette 
    variable est inférieure à 100, incrémentez avec un pas de 15.</p>
    <?php
        for($i = 1; $i <= 100 ; $i+=15) {
            echo($i) . '<br />';
        }
    ?>
</body>
</html>
