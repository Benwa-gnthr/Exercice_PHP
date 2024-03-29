<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>Base de données</title>
</head>
<body>
    <div class="content">

        <h1>Connexion Base De Donnée</h1>

        <?php

            /*
            Se connecter à une base de données MySQL

                Pour travailler avec des informations stockées dans une BDD MySQL sur internet :
                    - Vous devez d'abord vous connecter au serveur stockant la base
                    - Sélectionner la BDD
                    - Écrire les requètes SQL qui interrogeront la BDD puis renverrons ce que vous souhaitez à l'intérieur de la page web

                Deux différentes API
                Les instructions MySQL qui permettent d'accéder aux tables d'une base de données sint regroupées dans deux API (Application Programming Interface) qui sont des groupes de fonctions :
                    - Le groupe MySQLi. Les fonctions issues de ce groupe sont réservées aux bases de données MySQL.
                    - Le groupe PDO. Les fonctions issues de ce groupe peuvent accéder à plusieurs SGBDR différents.

                Pour pouvoir se connecter à une base de données, il faut fournir au moins le nom du serveur, un nom d'utilisateur et un mot de passe.
                Mais dans le cas d'un vrai serveur (production), c'est votre fournisseur qui vous indiquera ces paramètres.

                On peut écrire des scripts PHP soit de manière procédurale avec l'API MySQLi, soit avec le modèle orienté objet et l'API PDO.
                Mais dans ce cas, il faut gérer les exceptions (les erreurs) qui peuvent se produire parceque le moteur PHP laisse une trace accessible de ce qui s'est passé au niveau de la connexion, comme le nom de l'utilisateur et le mot de passe. La gestion des erreurs s'effectue avec le try...catch.
            */

            # Connexion vers le serveur avec l'API MySQLi

            $svr_name= "127.0.0.1"; //même chose que localhost
            $user="root";
            $pwd="";

            # Je créé la connexion vers le serveur

            $con= mysqli_connect($svr_name, $user, $pwd);
                
            # Je test la connexion

            if(!$con){
                die("Échec de le connexion ".mysqli_connect_error());
            }
            echo "Connexion réussie";
        ?>

    </div>    
</body>
</html>