<div class="container">
  <p>Benvenuto nella pagina di registrazione! Compila il modulo sottostante per creare un nuovo account e accedere a tutte le funzionalità del nostro sito.
     Siamo entusiasti di averti con noi!</p>
  <form method="post" action="/users/login">   
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3 text-center">
      <a href="/password-reset">Hai dimenticato la password?</a>
    </div>
    <button type="submit" class="btn btn-success">Accedi</button>
  </form>
</div>