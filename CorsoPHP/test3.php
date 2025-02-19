<?php
// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Array con dati di login predefiniti
    $utenti = [
        "utente1" => "password123",
        "utente2" => "mypassword456"
    ];

    // Raccogliere i dati inviati dal form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se l'utente esiste e se la password è corretta
    if (isset($utenti[$username]) && $utenti[$username] == $password) {
        echo "Login riuscito! Benvenuto, " . htmlspecialchars($username) . ".";
    } else {
        echo "Credenziali errate. Riprova.";
    }
} else {
?>
    <!-- Form di login -->
    <form method="POST" action="">
        <label for="username">Nome utente:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Accedi">
    </form>
<?php
}
?>
