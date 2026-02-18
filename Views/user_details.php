<?php include __DIR__.'/partials/header.php';?>
<div class="container">
    <h1>Dettagli Utente</h1>
    <p><?= htmlspecialchars($user['nome'])?></p>
    <p><?= htmlspecialchars($user['cognome'])?></p>
    <p><?= htmlspecialchars($user['email'])?></p>
</div>
<?php include __DIR__.'/partials/footer.php';?>