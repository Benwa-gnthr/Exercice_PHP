<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./styleex5.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Unbounded&display=swap" rel="stylesheet">
    <title>Exercice 5</title>
</head>
<body>
    <nav>
        <a href="./indexex1.php"><h1>EXERCICE 1</h1></a>
        <a href="./indexex2.php"><h1>EXERCICE 2</h1></a>
        <a href="./indexex3.php"><h1>EXERCICE 3</h1></a>
        <a href="./indexex4.php"><h1>EXERCICE 4</h1></a>
        <a href="./indextp.php"><h1>ACCUEIL</h1></a>
    </nav>
    <div class="toggler-container">
        <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
            <span class="line l1"></span>
            <span class="line l2"></span>
            <span class="line l3"></span>
        </button>    
    </div>
    <section>
    <div class="exo5">
        <h2>Cinquième exercice :</h2>
        <form action="" method="get">
            <input type="text" name="id" placeholder="Votre Identifiant" class="input">
            <input type="password" name="mdp" placeholder="Votre mot de passe" class="input">
            <input type="submit" value="Envoyer" class="btn">
        </form>
        <p>Bonjour, vous vous êtes fait hacker votre identifiant est <?php echo $_GET['id'];?> et votre mot de passe <?php echo $_GET['mdp'];?></p>
    </div>        
    </section>

<script src="./script.js"></script>
</body>
</html>