<!-- simulare il processo di login, senza utilizzo di un database ma utilizzando i cookies.
1) Form con email e password e un campo submit.
2) Quando viene cliccato il submit, il risultato viene inviato ad una pagina php.
3) Lato php, controlliamo che username e password non siano vuoti, in tal caso stampiamo un messaggio di errore
4) Verifichiamo i dati ricevuti, se corrispondono o meno a dati presenti in questi array:
    $persona1 = array("marco@email.it","12345","Marco","Rossi");
    $persona2 = array("luigi@email.it","abcdef","Luigi","Bianchi");
    $persona3 = array("luca@email.it","123abc","Luca","Verdi");
    Dopodichè stamperemo "Bentornato " + nome e cognome e salveremo il cookie per ogni accesso successivo.
5) Se l'utente è loggato, mostreremo un pulsante "Disconnetti" che andrà ad eliminare il cookie.

Es 1:
l'utente inserisce questi valori:
email = luigi@email.it, password = abcdef.
La pagina mostrerà "Bentornato Luigi Bianchi" e creerà il cookie.

Es 2:
l'utente inserisce questi valori:
email = marco@email.it, password = abcdef. (NOTA CHE LA PASSWORD e' SBAGLIATA!)
La pagina mostrerà "Utente o password non validi". -->


<?php
$persona1 = array("marco@email.it", "12345", "Marco", "Rossi");
$persona2 = array("luigi@email.it", "abcdef", "Luigi", "Bianchi");
$persona3 = array("luca@email.it", "123abc", "Luca", "Verdi");


// $utenti = array($persona1, $persona2, $persona3);

if (isset($_POST['logout'])) {
    setcookie('logged_in', '', time() - 3600, '/');
    setcookie('fname', '', time() - 3600, '/');
    setcookie('lname', '', time() - 3600, '/');

}

if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

    foreach ($utenti as $utente) {
        if ($utente['email'] === $email && $utente['password'] === $password) {
            echo "Bentornato " . $utente['fname'] . " " . $utente['lname'];
            echo '<form method="POST"><button type="submit" name="logout">Disconnetti</button></form>';
            break;
        }
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <form action="http://localhost/corsoPHP/login.php" method="POST">

        <!-- <label for="fname" name="fname">Nome:</label>
        <input type="text" name="fname" /> -->

        <?php
        if (isset($_POST['fname']) && ($_POST['fname'] == "")) {
            echo '<span class="error">Questo campo è obbligatorio!</span>';
        }
        ?>

        <!-- <label for="lname" name="lname">Cognome:</label>
        <input type="text" name="lname" /> -->

        <?php
        if (isset($_POST['lname']) && ($_POST['lname'] == "")) {
            echo '<span class="error">Questo campo è obbligatorio!</span>';
        }
        ?>


        <label for="email" name="email">Email:</label>
        <input type="email" name="email" />

        <?php
        if (isset($_POST['email']) && ($_POST['email'] == "")) {
            echo '<span class="error">Questo campo è obbligatorio!</span>';
        }
        ?>

        <label for="password" name="password">Password:</label>
        <input type="password" name="password" />

        <?php
        if (isset($_POST['password']) && ($_POST['password'] == "")) {
            echo '<span class="error">Questo campo è obbligatorio!</span>';
        }
        ?>
        <button type="submit">Login</button>

    </form>
</body>

</html>