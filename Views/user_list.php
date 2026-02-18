<?php include __DIR__.'/partials/header.php';?>

<div class="container">
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
  <button type="button" class="btn btn-success mt-5""><a href="users/crea" class="text-white text-decoration-none" >Aggiungi utente</a></button>
</div>

<?php include __DIR__.'/partials/footer.php';?>