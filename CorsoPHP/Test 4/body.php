<?php
$utenti = [
    ["nome" => "Pinca", "cognome" => "Pallina", "email" => "pinca.pallina@email.com"],
    ["nome" => "Tizio", "cognome" => "Caio", "email" => "tizio.caio@email.com"],
    ["nome" => "Sempronio", "cognome" => "Nevio", "email" => "sempronio.nevio@email.com"]
];
?>

<h2>Lista Utenti</h2>
<table class="user-table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($utenti as $utente): ?>
            <tr>
                <td><?php echo htmlspecialchars($utente['nome']); ?></td>
                <td><?php echo htmlspecialchars($utente['cognome']); ?></td>
                <td><?php echo htmlspecialchars($utente['email']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
