<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks-1</title>
</head>
<body>

<!-- Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<?php
    $campionato = [
        [
            "home" => "Olimpia Milano",
            "ospite" => "cantù",
            "puntiHome" => "55",
            "puntiOspite" => "60"
        ],

        [
            "home" => "Torino",
            "ospite" => "Bologna",
            "puntiHome" => "72",
            "puntiOspite" => "50"
        ],

        [
            "home" => "Genova",
            "ospite" => "Firenze",
            "puntiHome" => "80",
            "puntiOspite" => "60"
        ],
    ];

for($i = 0; $i < count($campionato); $i++){
    echo $campionato[$i]["home"] . " - " . $campionato[$i]["ospite"] . " | " . $campionato[$i]["puntiHome"] . " - " . $campionato[$i]["puntiOspite"] . "<br>";
}
    ?>

</body>
</html>