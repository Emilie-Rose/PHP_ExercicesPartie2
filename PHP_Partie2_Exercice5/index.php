<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>


    <h2 class="">Exercice 5</h2>
    <p style="color:#8080FF">Initialisez une variable à 200. Tant que cette 
    variable est supérieure à 0, décrémentez avec un pas de 12.</p>
    <?php
        for($i = 200; $i >= 0 ; $i-=12) {
            echo($i) . '<br />';
        }
    ?>
</body>
</html>
