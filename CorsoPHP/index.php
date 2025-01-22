<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova PHP</title>
</head>

<body>
    <?php
    $name = "Pinca";
    $surname = "Pallina";
    $age = 77;
    $isStudent = true;

    echo "Il mio nome è " . $name . " " . $surname . "<br> Ed ho " . $age . " anni";

    //Istruzione condizionale
    if ($age >= 18) {
        echo "<br><h1>Sei maggiorenne</h1>";
    } else {
        echo "<br><h2>Sei troppo piccol*, torna quando avrai compiuto 18 anni!</h2>";
    }

    if ($isStudent) {
        echo "Studente <br>";
    } else {
        echo "Non studente <br>";
    }

    echo "<br>";

    //WHILE
    $count = 7;
    while ($count >= 0) {
        echo "Conto alla rovescia: " . $count . "<br>";
        $count--;
    }

    echo "<br>";

    //Ciclo For
    for ($i = 0; $i <= 6; $i++) {
        echo "Numero: " . $i . "<br>";
    }

    echo "<br>";

    //Ciclo foreach
    $fruits = ["Apple", "Banana", "Orange", "Coconut", "Strawberry"];
    foreach ($fruits as $fruit) {
        echo "Fruit: " . $fruit . "<br>";
    }

    echo "<br>";

    echo "<table border='1' style='border-collapse: collapse;'>";

    for ($riga = 1; $riga <= 10; $riga++) {
        echo "<tr>";

        for ($col = 1; $col <= 10; $col++) {
            $prod = $riga * $col;
            echo "<td style='padding: 11px;'>" . $prod . "</td>";
        }
    }

    echo "</tr>";


    echo "</table>";
    ?>
</body>

</html>