<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./styleEx3.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Changa&family=Gabarito&family=Nunito&family=Pridi:wght@300&family=Roboto&family=Tilt+Neon&display=swap" rel="stylesheet">
    <title>Exercice_13/10/2023</title>
<body>
    <nav>
        <a href="./index.php"></a>
    </nav>
    <div>
        <section class="title"><h1>TROISIEME EXERCICE</h1></section>
        <section class="middle">
            <?php
            $nomComplet = "Mon Nom Complet est = ";
            $prenom = "Benwa";
            $nom = " GONTHIER";
            echo "<hr>";
            echo "CONCATENATION";
            echo "<hr>";
            echo $nomComplet.$prenom.$nom;
            ?>
        </section>        
    </div>
</body>
</html>