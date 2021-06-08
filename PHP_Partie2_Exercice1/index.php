<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 2</h1>

    <h2 class="">Exercice 1</h2>
    <p style="color:#8080FF">Créez une boucle qui affiche les nombres de 0 à 10.</p>
    <?php
    // methode 1
        for($i = 0; $i <= 10; $i++) {
            echo($i) . '<br />';
        }
    // methode 2 
    //     $i = 0;
    //     while($i <= 10) {
    //         echo($i);
    //         $i++;
        // }
    ?>
</body>
</html>
