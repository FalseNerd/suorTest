<?php
// Dati di esempio
$persona1 = array("marco@email.it", "12345", "Marco", "Rossi");
$persona2 = array("luigi@email.it", "abcdef", "Luigi", "Bianchi");
$persona3 = array("luca@email.it", "123abc", "Luca", "Verdi");

// Creiamo un array di utenti
$utenti = array($persona1, $persona2, $persona3);

// Se l'utente è già loggato (controlliamo il cookie)
if (isset($_COOKIE['user'])) {
    $user = unserialize($_COOKIE['user']);
    echo "Bentornato " . $user[2] . " " . $user[3] . "<br>";
    echo "<form method='POST'><input type='submit' name='logout' value='Disconnetti'></form>";
    
    // Gestiamo il logout
    if (isset($_POST['logout'])) {
        setcookie('user', '', time() - 3600, '/');  // Eliminiamo il cookie
        header("Location: login_form.html");  // Ricarichiamo la pagina di login
    }
} else {
    // Se il form è stato inviato
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Controlliamo se email e password non sono vuoti
        if (empty($email) || empty($password)) {
            echo "Email e password non possono essere vuoti.";
        } else {
            $loginSuccess = false;
            
            // Verifica se l'email e la password corrispondono a un utente valido
            foreach ($utenti as $utente) {
                if ($utente[0] == $email && $utente[1] == $password) {
                    $loginSuccess = true;
                    setcookie('user', serialize($utente), time() + 3600, '/');  // Creiamo il cookie per 1 ora
                    echo "Bentornato " . $utente[2] . " " . $utente[3] . "<br>";
                    break;
                }
            }

            // Se login fallito
            if (!$loginSuccess) {
                echo "Utente o password non validi.";
            }
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
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" />

        <label for="password">Password:</label>
        <input type="password" name="password" />
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
