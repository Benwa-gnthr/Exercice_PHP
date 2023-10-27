<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Vos Coordonnées</h1>

        <div class="name">
            <h2>Votre Nom et Prénom :</h2>
            <h3><?php echo $_POST['name'].'<br>'; ?></h3>
        </div>

        <div class="adress">
            <h2>Votre Adresse :</h2>
            <h3><?php echo $_POST['adress'].'<br>'; ?></h3>
        </div>

        <div class="city">
            <h2>Ville :</h2>
            <h3><?php echo $_POST['city'].'<br>'; ?></h3>
        </div>

        <div class="postal">
            <h2>Code Postal :</h2>
            <h3><?php echo $_POST['postal'].'<br>'; ?></h3>
        </div>    
    </div>

</body>
</html>


