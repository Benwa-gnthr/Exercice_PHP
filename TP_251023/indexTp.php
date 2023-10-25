<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <title>TP_25/10/23</title>
</head>
<body>
    <h1>TP du 25/10/2023</h1>
    <div class="container">

        <div class="name-container">

            <?php 
        //Création du tableau.
                $personne = array(
                    "Nom" => "Gonthier",
                    "Prénom" => "Benwa",
                    "Âge" => 21
                );

        //Ajouts de la ville.
                $personne["Ville"] = "New-York";

        //Affichage du prénom et de l'age.
                echo "Nom : " . $personne["Nom"] . "<br>";
                echo "Âge : " . $personne["Âge"] . " ans<br>";
                echo "<hr>";
        //Boucle foreach
                echo "Le tableau contient :<br>";
                foreach ($personne as $elem => $value) {
                    echo "$elem : $value<br>";
                }
                ?>            
        </div>

        <div class="num-container">

            <?php
        //Création du tableau numérique.
                $nombres = range(1, 10);

        //Ajouts des nombres de 11 à 20.
                $nombres = array_merge($nombres, range(11, 20));
    
        //Vérification du chiffre 15.
                if (in_array(15, $nombres)) {
                    echo "Le tableau contient le nombre 15.<br>";
                } else {
                    echo "Le tableau ne contient pas le nombre 15.<br>";
                }
                echo "<hr>";
        //Boucle for 
                echo "Éléments du tableau \$nombres :<br>";
                for ($i = 0; $i < count($nombres); $i++) {
                    echo $nombres[$i] . " ";
                }
                echo "<br>";
            ?>    

        </div>
      
    </div>
    <div class='circle' id="circle1" ></div>
    <div class='circle' id="circle2" ></div>
    <script src="./script.js"></script>
</body>
</html>