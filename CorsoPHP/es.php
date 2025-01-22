<?php

for ($riga = 1; $riga <= 10; $riga++) {
    $ris = 5 * $riga;

    if ($ris % 2 == 0) {
        echo $ris . "<br>";
    }
}

function stampa()
{
    echo "Hello World! <br>";
}

stampa();

function addizione($x, $y = 7)
{
    return $x + $y;

}
echo "Addizione con parametro opzionale: " . addizione(3);

?>