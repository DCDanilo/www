<div class="container">
  <p>Ecco le informazioni relative al tuo profilo</p>
  <form method="post" action="/users/store">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
      <label for="cognome" class="form-label">Cognome</label>
      <input type="text" class="form-control" id="cognome" name="cognome" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
        <div class="mb-3">
      <label for="password_confirm" class="form-label">Conferma Password</label>
      <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
    </div>
    <button type="submit" class="btn btn-success">Registrati</button>
  </form>
</div>