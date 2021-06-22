<?php

/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$partite = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60
    ],
    [
        "squadra_casa" => "Germani Brescia",
        "squadra_ospite" => "New Basket Brindisi",
        "punti_casa" => 114,
        "punti_ospite" => 62
    ],
    [
        "squadra_casa" => "Dinamo Sassari",
        "squadra_ospite" => "Fortitudo Bologna",
        "punti_casa" => 78,
        "punti_ospite" => 93
    ],
    [
        "squadra_casa" => "Reyer Venezia",
        "squadra_ospite" => "Menssana Siena",
        "punti_casa" => 32,
        "punti_ospite" => 56
    ],
];

/* Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET("name");
$mail = $_GET("mail");
$age = $_GET("age");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>

    <h2>Snack 1</h2>

    <?php for ($i = 0; $i < count($partite); $i++) { ?>
        <p>
            <?php echo $partite[$i]["squadra_casa"]; ?> - <?php echo $partite[$i]["squadra_ospite"]; ?> | <?php echo $partite[$i]["punti_casa"]; ?>-<?php echo $partite[$i]["punti_ospite"]; ?>
        </p>
    <?php } ?>

</body>

</html>