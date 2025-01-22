<?php

if ($_POST['nome'] == "") {
    echo "Il campo è vuoto";
}

echo "Il nome è " . $_POST['nome'] . " ed il cognome è " . $_POST['cognome'];

?>