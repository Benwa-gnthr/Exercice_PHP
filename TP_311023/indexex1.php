<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleEx1.css">
    <title>Exercice 1</title>
</head>
<body>
    <div class="container">
        <h1>Exercice 1</h1>
        <h2>Question : Parmi les variables suivantes, lesquelles ont un nom valide : mavar, $mavar, $var5, $_mavar, $_5var, $__élément1, $hotel4* ?</h2>
        <h3>Les Valeurs vaide sont les suivantes : Voici leur valeur qui s'affiche !</h3>
            <h3 class="php-container">
                <?php
                    $mavar = "Je suis la valeur de \$mavar !";
                    $mavar5 = "moi la valeur de \$var5 !";
                    $_mavar = "Im the \$_mavar's value !";
                    $__élément1 = "Estoy la valor de \$__élément1";


                ?>
                    <span><?php echo $mavar;?></span>
                    <span><?php echo $mavar5;?></span>
                    <span><?php echo $_mavar;?></span>
                    <span><?php echo $__élément1;?></span>                                   
            </h3>      
    </div>

</body>
</html>