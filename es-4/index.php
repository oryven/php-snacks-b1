<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es-4</title>
</head>
<body>
    <?php
$arr = [];

while(count($arr) < 15){
    $rdm = rand(20, 0);

    if (!in_array($rdm, $arr)){
        $arr [] = $rdm;
    }
}
var_dump($arr);
    ?>
</body>
</html>