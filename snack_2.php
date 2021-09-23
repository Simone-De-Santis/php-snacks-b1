<?php
// Creare un array contenente qualche alunno di un’ipotetica classe.
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
// Stampare Nome, Cognome e la media dei voti di ogni alunno.

$students = [
    [
        "name" => "Simone",
        "surname" => "De Santis",
        "vote" => ["2", "5", "9"]
    ],
    [
        "name" => "Giorgia",
        "surname" => "Fabbrizzi",
        "vote" => ["8", "8", "2"]
    ],
    [
        "name" => "Michele",
        "surname" => "De Marchis",
        "vote" => ["9", "3", "7"]
    ],
    [
        "name" => "Alessandro",
        "surname" => "Rossi",
        "vote" => ["5", "1", "8"]
    ],
    [
        "name" => "Marco",
        "surname" => "Tomassi",
        "vote" => ["4", "7", "3"]
    ],
    [
        "name" => "Giovanni",
        "surname" => "Totti",
        "vote" => ["3", "6", "4"]
    ],
];

function average_grades($nums)
{
    return array_sum($nums) / count($nums);
    //   restituisce somma dell'array
}
$numeri = ["3", "6", "4"];
$media = round(average_grades($numeri));
echo $media;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <?php foreach ($students as $student) { ?>
        <ul>
            <li><?php echo $student["name"] ?></li>
            <li><?php echo $student["surname"] ?></li>
            <li><?php echo round(average_grades($student["vote"])) ?></li>
        </ul>
    <?php } ?>
</body>

</html>