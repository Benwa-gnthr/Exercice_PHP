<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Exerccice1</title>
</head>
<body>
<?php

// Exercice 1
$fruits = array("Pomme", "Banane", "Orange", "Fraise", "Cerise");

echo "Le second fruits est: " . $fruits[1] . "<br>";

$fruits[] = "Ananas";

$tailleTableau = count($fruits);
echo "Le tableau contient: " . $tailleTableau ."lignes"."<br>";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$etudiants = array(
    'Alice' => 18,
    'Bob' => 15,
);
echo "<br>";

// Exercice 2 
echo "La note d'Alice est de: " . $etudiants['Alice'] . "<br>";

$etudiants['Bob'] = 17;

$etudiants['Charlie'] = 16;

$totalNotes = array_sum($etudiants);
$nombreEtudiants = count($etudiants);
$moyenne = $totalNotes / $nombreEtudiants;

echo "La moyenne des étudiants est de: " . $moyenne;
?>

</body>
</html>
