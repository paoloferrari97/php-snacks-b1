<!-- Snack 3B
Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), 
filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
Se non c’è un filtro, visualizzare come in precedenza tutti gli hotel -->

<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$parcheggio = $_GET["parcheggio"]; //si o no
$stelle = $_GET["stelle"];
$distanza_centro = $_GET["distanza"];

$hotels_filtrati = [];

if (isset($parcheggio)) {
    if ($parcheggio == 'si') {
        for ($i = 0; $i < count($hotels); $i++) {
            if ($hotels[$i]['parking']) {
                $hotels_filtrati[] = $hotels[$i];
            }
        }
    } else {
        for ($i = 0; $i < count($hotels); $i++) {
            if (!$hotels[$i]['parking']) {
                $hotels_filtrati[] = $hotels[$i];
            }
        }
    }
} else if (isset($stelle)) {
    for ($i = 0; $i < count($hotels); $i++) {
        if ($hotels[$i]['vote'] >= $stelle) {
            $hotels_filtrati[] = $hotels[$i];
        }
    }
} else if (isset($distanza_centro)) {
    for ($i = 0; $i < count($hotels); $i++) {
        if ($hotels[$i]['distance_to_center'] <= $distanza_centro) {
            $hotels_filtrati[] = $hotels[$i];
        }
    }
} else {
    $hotels_filtrati = $hotels;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks 3</title>
</head>

<body>

    <?php foreach ($hotels_filtrati as $hotel) { ?>
        <?php foreach ($hotel as $key => $value) { ?>
            <p><?php echo $key; ?>: <?php echo $value; ?></p>
        <?php } ?>
    <?php } ?>

</body>

</html>