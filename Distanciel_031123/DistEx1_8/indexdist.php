<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>TP 31/10/2023</title>
</head>
<body>
    <div class="main-container">
    <div class="ex1">
<!-- Exercice 1 -->

    <?php
        $nombre = 13;

        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "Le nombre est un multiple de 3 et de 5.";
        } else {
            echo "Le nombre n'est pas un multiple de 3 et de 5.";
        }
    ?>        
    </div>

<div class="ex2">
<!-- Exercice 2 -->
    <?php
        $age = 30;
        $sexe = "féminin";

        if ($sexe === "féminin" && $age >= 21 && $age <= 40) {
            echo "Bienvenue ! Vous êtes une femme âgée de " . $age . " ans.";
        } else {
            echo "Désolé, vous ne remplissez pas les critères pour cette sélection.";
        }
    ?>    
</div>

<div class="ex3">
<!-- Exercice 3 -->

    <?php

        $pairSuiviDeImpairsTrouve = false;

        while (!$pairSuiviDeImpairsTrouve) {
            $nombre1 = rand(1, 100);
            $nombre2 = rand(1, 100);
            $nombre3 = rand(1, 100);
        
            if ($nombre1 % 2 === 0 && $nombre2 % 2 !== 0 && $nombre3 % 2 !== 0) {
                $pairSuiviDeImpairsTrouve = true;
                echo "Suite trouvée : $nombre1, $nombre2, $nombre3";
            }
        }
    ?>    
</div>

    
<!-- Exercice 4 -->
<div class="ex4">
    <?php

        $nombreInitial = 548;

        $nombreAleatoire = 0;
        $nombreDeTirages = 0;

        while ($nombreAleatoire !== $nombreInitial) {
            $nombreAleatoire = rand(100, 999);
            $nombreDeTirages++;
        }

        echo "Nombre initial : $nombreInitial <br>";
        echo "Nombre de coups pour obtenir $nombreInitial : $nombreDeTirages";

    ?>    
</div>
<div class="ex5">

<!-- Exercice 5 (While) -->
    <?php
        $nombreInitial = 548;

        $nombreAleatoire = 0;
        $nombreDeTirages = 0;

        while ($nombreAleatoire !== $nombreInitial) {
            $nombreAleatoire = rand(100, 999);
            $nombreDeTirages++;
        }

        echo "Nombre initial : $nombreInitial <br>";
        echo "Nombre de coups pour obtenir $nombreInitial : $nombreDeTirages";
    ?>

<!-- Exercice 5 (For) -->
    <?php

        $nombreInitial = 548;

        $nombreDeTirages = 0;

        for ($nombreAleatoire = 0; $nombreAleatoire !== $nombreInitial; $nombreDeTirages++) {
            $nombreAleatoire = rand(100, 999);
        }

        echo "Nombre initial : $nombreInitial <br>";
        echo "Nombre de coups pour obtenir $nombreInitial : $nombreDeTirages";
    ?>    

</div>

<!-- Exercice 6 -->
<div class="ex7">

<!-- Exercice 7 (while) -->
    
    <?php
        $nombreDonne = 5;

        $premierMultiple = null;

        while ($premierMultiple === null) {
            $randomNumber = rand(1, 100);
        
            if ($randomNumber % $nombreDonne === 0) {
                $premierMultiple = $randomNumber;
            }
        }

        echo "Le premier multiple de $nombreDonne obtenu par tirage aléatoire est : $premierMultiple";
    ?>

<!-- Exercice 7 (do...while) -->

    <?php
        $nombreDonne = 5;

        $premierMultiple = null;

        do {
            $randomNumber = rand(1, 100);
        
            if ($randomNumber % $nombreDonne === 0) {
                $premierMultiple = $randomNumber;
            }
        } while ($premierMultiple === null);

        echo "Le premier multiple de $nombreDonne obtenu par tirage aléatoire est : $premierMultiple";
    ?>    
</div>

    <!-- Exercice 8 -->


    </div>
</body>
</html>