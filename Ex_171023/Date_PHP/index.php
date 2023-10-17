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
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
    <title>Date_PHP</title>
</head>
<body>
    <div>
        <section class="title">
            <h1>EXERCICE DE MANIPULATION DES DATES EN PHP</h1>
        </section>
        <section class="middle">
            <?php
                $dateActuelle = date("Y-m-d H:i:s");
                echo $dateActuelle;
                echo "<hr>";
                $dateActuelle = date('Y-m-d');
                $nomJour = date('l', strtotime($dateActuelle));
                echo 'Le jour de la semaine correspondant à la date actuelle est : ' . $nomJour;
                echo "<hr>";
                $anneeDeNaissance = 1990;
                $anneeActuelle = date("Y");
                $age = $anneeActuelle - $anneeDeNaissance;
                echo "La personne a $age ans.";
                echo "<hr>";
                // Créez une variable $date contenant une date au format "JJ/MM/AAAA"
                $originalDate = "2023/10/17";
                $newDate = date("d/m/Y", strtotime($originalDate));
                echo $newDate;
            ?>        
        </section>        
    </div>
</body>
</html>