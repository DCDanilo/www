<?php include __DIR__.'/partials/header.php';
$isEdit = isset($user);
$action = $isEdit ? "/users/update/" : "/users/store";
$pageTitle = $isEdit ? "Modifica Utente" : "Aggiungi Nuovo Utente";
?>

<div class="container">
  <h1><?php echo $pageTitle; ?></h1>

  <form method="post" action="<?php echo $action; ?>">
    <?php if($isEdit):?>
      <input type="hidden" name="id_utente" value="<?php echo $user['id_utente'];?>">
    <?php endif;?>   
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?= $isEdit ? $user['nome'] : ''; ?>">
    </div>
      <div class="mb-3">
      <label for="cognome" class="form-label">Cognome</label>
      <input type="text" class="form-control" id="cognome" name="cognome" value="<?= $isEdit ? $user['cognome'] : ''; ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $isEdit ? $user['email'] : ''; ?>">
    </div>
    <button type="submit" class="btn btn-success"><?= $isEdit ? "Aggiorna Utente" : "Crea Utente"; ?></button>
  </form>

</div>

<?php include __DIR__.'/partials/footer.php';?>