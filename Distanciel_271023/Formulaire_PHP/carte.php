<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./stylecarte.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Chivo+Mono&family=Unbounded&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Vos Informations</h1>

        <div class="name coord">
            <h2 class="mini_title">Nom et Prénom :</h2>
            <h3><?php echo $_POST['name'].'<br>'; ?></h3>
        </div>

        <div class="adress coord">
            <h2 class="mini_title">Votre Adresse :</h2>
            <h3><?php echo $_POST['adress'].'<br>'; ?></h3>
        </div>

        <div class="city coord">
            <h2 class="mini_title">Ville :</h2>
            <h3><?php echo $_POST['city'].'<br>'; ?></h3>
        </div>

        <div class="postal coord">
            <h2 class="mini_title">Code Postal :</h2>
            <h3><?php echo $_POST['postal'].'<br>'; ?></h3>
        </div>    
    </div>

</body>
</html>


