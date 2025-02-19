<?php
// Dati di connessione al database
$host = "localhost";      // Server del database (es. localhost)
$username = "osvaldina";       // Nome utente del database
$password = "12345";           // Password del database
$dbname = "Suore"; // Nome del database

// Connessione al database
$conn = new mysqli($host, $username, $password, $dbname);

// Controlla se la connessione è riuscita
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Query di esempio (puoi sostituirla con la tua query personalizzata)
$query = "SELECT * FROM sorelle";  // Puoi fare una SELECT filtrata come "SELECT * FROM utenti WHERE nome = 'Mario'"

// Esegui la query
$result = $conn->query($query);

// Controlla se ci sono risultati
if ($result->num_rows > 0) {
    // Crea un array per memorizzare i risultati
    $data = array();

    // Estrai i dati dalla query e aggiungili all'array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Imposta l'header per JSON
    header('Content-Type: application/json');
    
    // Restituisci i dati in formato JSON
    echo json_encode($data);
} else {
    // Se non ci sono risultati, restituisci un array vuoto o un messaggio
    echo json_encode(array("message" => "Nessun dato trovato"));
}

// Chiudi la connessione
$conn->close();
?>
