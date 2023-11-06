<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./styleform.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa&family=Chivo+Mono&family=Unbounded&display=swap" rel="stylesheet">
    <title>Adresse Client</title>
</head>
<body>
    <form action="carte.php" method="POST">
        <h1>Coordonées:</h1>
        <div class="name coord">
            <input type="text" name="name" placeholder="Votre Nom">            
        </div>
        <div class="adress coord">
            <input type="text" name="adress" placeholder="Votre Adresse">        
        </div>
        <div class="city coord">
            <input type="text" name="city" placeholder="Ville">            
        </div>
        <div class="postal coord">
            <input type="text" name="postal" placeholder="Code Postal">     
        </div>
            <input type="submit" value="Envoyer" class="button">
    </form>
</body>
</html>