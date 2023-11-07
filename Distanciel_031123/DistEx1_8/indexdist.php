<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono&display=swap" rel="stylesheet">
    <title>TP 31/10/2023</title>
</head>
<body>
    
    <div class="main-container">
<!-- Exercice 1 -->
<div class="card exo">
    <div class="front-card">
        <h2>Exercice 1</h2>
    </div>
    <div class="back-card">
    <?php
        $nombre = 13;

        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "Le nombre est un multiple de 3 et de 5.";
        } else {
            echo "Le nombre n'est pas un multiple de 3 et de 5.";
        }
    ?>         
    </div>       
</div>

<!-- Exercice 2 -->
<div class="card exo">
    <div class="front-card">
        <h2>Exercice 2</h2>
    </div>
    <div class="back-card">
        <?php
            $age = 30;
            $sexe = "féminin";

            if ($sexe === "féminin" && $age >= 21 && $age <= 40) {
                echo "Bienvenue ! <br> Vous êtes une femme âgée de " . $age . " ans.";
            } else {
                echo "Désolé, vous ne remplissez pas les critères pour cette sélection.";
            }
        ?>          
    </div>
</div>

<!-- Exercice 3 -->
<div class="card exo">
    <div class="front-card">
        <h2>Exercice 3</h2>        
    </div>
    <div class="back-card">
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
</div>

<!-- Exercice 4 -->    
<div class="card exo">
    <div class="front-card">
        <h2>Exercice 4</h2>
    </div>
    <div class="back-card">
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
</div>

<div class="card exo">
<!-- Exercice 5 (While) -->
    <div class="front-card">
        <h2>Exercice 5</h2>
    </div>
    <div class="back-card">
        <h4>WHILE</h4>
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
    <br>
<!-- Exercice 5 (For) -->
        <h4>FOR</h4>
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
   

</div>

<!-- Exercice 6 -->

<!-- Exercice 7 (while) -->
<div class="card exo">
    <div class="front-card">
        <h2>Exercice 7</h2>
    </div>
    <div class="back-card">
    <h4>WHILE</h4>
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
    <h4>DO...WHILE</h4>
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

</div>

    <!-- Exercice 8 -->


    </div>
</body>
</html>