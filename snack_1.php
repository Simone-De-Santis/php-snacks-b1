<?php
// Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.


$list_number = [];
while (count($list_number)  < "15") {

    $generate_random = mt_rand(1, 100);
    if (!in_array($generate_random, $list_number)) {
        $list_number[] = $generate_random;
    }
}
var_dump($list_number);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK-1</title>

</head>

<body>
    <h1>lista di 15 numeri casuali diversi</h1>

    <?php foreach ($list_number as $number) { ?>
        <p><?php echo $paragrph ?> </p>
    <?php } ?>

</body>

</html>