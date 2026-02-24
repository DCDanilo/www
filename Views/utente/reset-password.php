<div class="container">
  <p>Per recuperare la password, inserisci la tua email e clicca su Reset.</p>

  <form method="post" action="/users/reset-password">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Reset</button>
  </form>
</div>