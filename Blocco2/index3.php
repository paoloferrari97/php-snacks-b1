<?php

$lista_invitati = [
    "Paolo",
    "Mario",
    "Luigi",
    "Giovanni"
];

if (in_array($_GET["nome"], $lista_invitati)) {
    $esito = 'Ok';
} else {
    $esito = 'Ko';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span>
        <?php echo $esito; ?>
    </span>
</body>

</html>