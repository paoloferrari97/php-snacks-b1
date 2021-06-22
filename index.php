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

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
    $esito_2 = "Accesso riuscito";
} else {
    $esito_2 = "Accesso negato";
}

/* Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z */

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$numeri_casuali = [];
while (count($numeri_casuali) < 15) {
    $n_random = rand(1, 100);
    if (!in_array($n_random, $numeri_casuali)) {
        $numeri_casuali[] = $n_random;
    }
}

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

    <h2>Snack 2</h2>

    <p>
        <?php echo $esito_2; ?>
    </p>

    <h2>Snack 3</h2>

    <?php foreach ($posts as $key => $val) { ?>
        <h3>
            <?php echo $key; ?>
        </h3>
        <?php for ($i = 0; $i < count($val); $i++) { ?>
            <?php foreach ($val[$i] as $keyy => $vall) { ?>
                <h5>
                    <?php echo $keyy; ?>:
                </h5>
                <p>
                    <?php echo $vall; ?>
                </p>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <h2>Snack 4</h2>

    <?php for ($i = 0; $i < count($numeri_casuali); $i++) { ?>
        <p>
            <?php echo $numeri_casuali[$i] ?>
        </p>
    <?php } ?>

</body>

</html>