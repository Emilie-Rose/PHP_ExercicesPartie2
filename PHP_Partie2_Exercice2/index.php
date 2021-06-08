<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 2</h2>
    <p style="color:#8080FF">Créez deux variables. L'une initialisée à 0 
    et l'autre avec un nombre aléatoire de 1 à 100.
    Tant que la variable n'a pas atteint 20, multiplier la première variable
     par la deuxième et afficher le résultat.</p>
    <?php 
        $a = 0;
        $b = 27;
        while ($a <= 20) {
            echo($a*$b) . '<br />';
            $a++;
        }
    ?>

</body>
</html>
