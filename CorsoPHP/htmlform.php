<?php

if (!empty($_POST)) {
    echo "<h4> Il form è stato inviato con successo!</h4>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML e PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .error {
            display: inline;
            color: crimson;
        }
    </style>
</head>

<body>
    <form action="http://localhost/corsoPHP/htmlform.php" method="POST">
        <label for="fname" name="fname">Nome:</label>
        <input type="text" name="fname" />

        <?php
        if (isset($_POST['fname']) && ($_POST['fname'] == "")) {
            echo '<span class="error">Questo campo è obbligatorio!</span>';
        }
        ?>

        <label for="lname" name="lname">Cognome:</label>
        <input type="text" name="lname" />
        <?php
        if (isset($_POST['lname']) && ($_POST['lname'] == "")) {
            echo '<span class="error">Questo campo è obbligatorio!</span>';
        }
        ?>
        <button type="submit">Invia</button>
    </form>
</body>

</html>