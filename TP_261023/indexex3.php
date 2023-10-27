<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./styleex3.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Unbounded&display=swap" rel="stylesheet">
    <title>Exercice 3</title>
</head>
<body>
    <nav>
        <a href="./indexex1.php"><h1>EXERCICE 1</h1></a>
        <a href="./indexex2.php"><h1>EXERCICE 2</h1></a>
        <a href="./indextp.php"><h1>ACCUEIL</h1></a>
        <a href="./indexex4.php"><h1>EXERCICE 4</h1></a>
        <a href="./indexex5.php"><h1>EXERCICE 5</h1></a>
    </nav>
    <div class="toggler-container">
        <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
            <span class="line l1"></span>
            <span class="line l2"></span>
            <span class="line l3"></span>
        </button>    
    </div>
    <section>
    <div class="exo3">
        <h2>Troisième exercice :</h2>
        <?php
            $noms = array("Benwa", "Lucas", "Marie", "Jean", "Clovis");

            $nomsVirg = implode(", ", $noms);
            
            echo $nomsVirg.".";
        ?>
    </div>        
    </section>
<script src="./script.js"></script>
</body>
</html>