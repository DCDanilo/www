<?php include __DIR__.'/partials/header.php';?>

<div class="container">
  <h1>Lista Utenti</h1>
  <ul class="list-group">
    <?php foreach ($users as $user): ?>
      <li class="list-group-item"><?= htmlspecialchars($user['nome']) ?></li>
    <?php endforeach; ?>
  </ul>
</div>

<?php include __DIR__.'/partials/footer.php';?>