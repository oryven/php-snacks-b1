<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es-2</title>
</head>
<body>

<!-- Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

    <?php

    // isset evita l'errore all'apertura della pagina ( accesso riusto o negato)

        if (isset($_GET['name'], $_GET["mail"], $_GET["age"])) {
            $name = $_GET["name"];
            $mail = $_GET["mail"];
            $age = $_GET["age"];

            if (strpos($mail, "@") && strpos($mail, ".") && strlen($name) > 3 && is_numeric($age)){
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        }
    ?> 
</body>
</html>