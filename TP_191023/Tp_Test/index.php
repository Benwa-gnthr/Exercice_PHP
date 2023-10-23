<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_Boucle</title>
</head>
<body>
    <?php
    //q.4
        $test = 42;
        var_dump($test);
    //q.5
        $sexe = "homme";

        if ($sexe == "homme") {
            echo "Vous êtes un homme.";
        } elseif ($sexe == "femme") {
            echo "Vous êtes une femme.";
        } else {
            echo "Le genre n'est pas spécifié.";
        }
        //q.6
        $budget = 1553.89;
        $achats = 1554.76;

        if ($budget >= $achats) {
            echo "Le budget permet de payer les achats.";
        } else {
            echo "Le budget ne permet pas de payer les achats.";
        }
        //q.7
        $age = 16;
        
        if ($age >= 18) {
            echo "Vous pouvez entrez vous avez plus de 18ans";
        }else {
            echo "Vous êtes trop jeune.";
        }
        //q.8
        $heure = 14;

        if ($heure >= 0 && $heure < 12) {
            echo "C'est le matin.";
        } elseif ($heure >= 12 && $heure < 18) {
            echo "C'est l'après-midi.";
        } else {
            echo "C'est la nuit.";
        }
    ?>
</body>
</html>