<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./styleex9.css">
    <title>Base de Données</title>
</head>
<body>

    <div class="container1 container">    
    
    <?php

        # Interrogation d'une BDD à l'aide de l'API MySQL

        # On interroge les informations d'une table (BDD) par l'intermédiaire d'une requête SQL qui renvoie un jeu de résultats qu'on affiche par la suite dans le navigateur (ou client).

        $cnx = mysqli_connect("localhost", "root","","casse");

        # Test de la connexion à la BDD

        if(mysqli_connect_errno()){
            echo "Érreur de connexion à la base ".mysqli_connect_error();
        }

        # Définition de la requête

        $sql = "SELECT * FROM personne WHERE Ville = 'Paris' OR Ville = 'Bordeaux'";

        if($result = mysqli_query($cnx, $sql)){
            echo "<h2>Pour cette requête <br> $sql </h2><br><br>";
            echo "<h3>Il y a : ".mysqli_num_rows($result). " réponses </h3><br>";
            echo "<br>";
            echo "<table>";
            echo "<th>"."NumAch"."</th>";
            echo "<th>"."Nom"."</th>";
            echo "<th>"."Age"."</th>";
            echo "<th>"."Ville"."</th>";
            echo "<th>"."Sexe"."</th>";

            # Mise en place d'une boucle pour la création des lignes

            while($row = mysqli_fetch_row($result)){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_free_result($result);
        }

        # Fermeture de la connexion à la base de données
        mysqli_close($cnx);
    ?>        
    </div>        

    <div class="container2 container">
    <?php

        $cnx = mysqli_connect("localhost", "root","","casse");

        if(mysqli_connect_errno()){
            echo "Érreur de connexion à la base ".mysqli_connect_error();
        }

        $sql = "SELECT * FROM personne WHERE Age BETWEEN 25 AND 40";

        if($result = mysqli_query($cnx, $sql)){
            echo "<h2>Pour cette requête <br> $sql </h2><br><br>";
            echo "<h3>Il y a : ".mysqli_num_rows($result). " réponses </h3><br>";
            echo "<br>";
            echo "<table>";
            echo "<th>"."NumAch"."</th>";
            echo "<th>"."Nom"."</th>";
            echo "<th>"."Age"."</th>";
            echo "<th>"."Ville"."</th>";
            echo "<th>"."Sexe"."</th>";

            while($row = mysqli_fetch_row($result)){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_free_result($result);
        }

        mysqli_close($cnx);
    ?>        
    </div>

    <div class="container3 container">
    <?php

        $cnx = mysqli_connect("localhost", "root","","casse");

        if(mysqli_connect_errno()){
            echo "Érreur de connexion à la base ".mysqli_connect_error();
        }

        $sql = "SELECT * FROM personne WHERE Nom LIKE '%n%'";

        if($result = mysqli_query($cnx, $sql)){
            echo "<h2>Pour cette requête <br> $sql </h2><br><br>";
            echo "<h3>Il y a : ".mysqli_num_rows($result). " réponses </h3><br>";
            echo "<br>";
            echo "<table>";
            echo "<th>"."NumAch"."</th>";
            echo "<th>"."Nom"."</th>";
            echo "<th>"."Age"."</th>";
            echo "<th>"."Ville"."</th>";
            echo "<th>"."Sexe"."</th>";

            while($row = mysqli_fetch_row($result)){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_free_result($result);
        }

        mysqli_close($cnx);
    ?>        
    </div>
<script src="./script.js"></script>
</body>
</html>