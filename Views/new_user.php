<?php include __DIR__.'/partials/header.php';?>

<div class="container">
  <h1>Aggiungi Nuovo Utente</h1>

  <form method="post" action="/users/store">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
      <div class="mb-3">
      <label for="cognome" class="form-label">Cognome</label>
      <input type="text" class="form-control" id="cognome" name="cognome">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include __DIR__.'/partials/footer.php';?>