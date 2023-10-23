<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //q.1
    $departement = 77;
    $codePostal = 77000; 

    while ($codePostal <= 77999) {
        echo $codePostal . "<br>"; 
    $codePostal++;
    }
    //q.2
    $chiffre = 5;
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $chiffre * $i;
        echo "$chiffre x $i = $resultat<br>";
    }
    //q.3
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "\n";
    }
    ?>
</body>
</html>