<!-- Funzionamento: 
ci sono due bottoni.

Incremento: 
Quando l'utente cliccherà sul bottone per incrementare, il valore salvato nel cookie aumenterà di 1.
Se il cookie non esiste, viene creato e inizializzato a 1.

Reset del contatore: 
quando l'utente clicca sul bottone di reset, il cookie viene eliminato impostando una
scadenza passata (time()-3600).

Visualizzazione del conteggio:
se il cookie esiste, viene mostrato il numero di clic memorizzato.
se il cookie non esiste, viene mostrato un messaggio iniziale. -->




<?php
    $cookieName = "clickCounter";
    $cookieExpire = time() + 86400;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <h1>Gestione Cookie</h1>
    <form method="POST">
        <button type="submit" name="increment" style="color:green;">Clicca per incrementare</button>
        <button type="submit" name="reset" style="color:red;">Resetta il contatore</button>
    </form>
</body>

</html>