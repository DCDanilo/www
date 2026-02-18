<?php include __DIR__.'/partials/header.php';?>

<div class="container">
  <?php if (isset($users) && !empty($users)):?>
  <h1>Lista Utenti</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Cognome</th>
      <th scope="col">Email</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
      <tr>
        <th scope="row"><?= htmlspecialchars($user['id_utente']) ?></th>
        <td><?= htmlspecialchars($user['nome']) ?></td>
        <td><?= htmlspecialchars($user['cognome']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td>     
          <button type="button" class="btn btn-danger">
            <a href="users/elimina?id=<?= $user['id_utente'];?>" class="text-dark text-decoration-none" >Elimina</a>
          </button>
          <button type="button" class="btn btn-warning ms-2">
            <a href="users/modifica?id=<?= $user['id_utente'];?>" class="text-dark text-decoration-none" >Modifica</a>
          </button>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else:?>
  <div class="alert alert-info text-center" role="alert">
  <h3>Non sono stati trovati utenti nel database.</h3>
  <h3>Clicca sul pulsante qui sotto per aggiungere un nuovo utente.</h3>
  </div>
  <div class="text-center mt-3">
    <button type="button" class="btn btn-success" onclick="location.href='users/crea'">Aggiungi utente</button>
  </div>
<?php endif;?>
</div>

<?php include __DIR__.'/partials/footer.php';?>