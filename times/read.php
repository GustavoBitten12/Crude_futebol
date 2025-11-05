
<?php
require '../config.php';
$times = $pdo->query("SELECT * FROM times")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Times</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

  <h1 class="mb-4">🏟️ Times</h1>
  <a href="create.php" class="btn btn-primary mb-3">➕ Novo Time</a>
  <a href="../index.php" class="btn btn-secondary mb-3">⬅ Voltar</a>

  <table class="table table-hover table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($times as $t): ?>
      <tr>
        <td><?= $t['id'] ?></td>
        <td><?= $t['nome'] ?></td>
        <td><?= $t['cidade'] ?></td>
        <td>
          <a href="update.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-warning">✏️ Editar</a>
          <a href="delete.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir time?')">🗑️ Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>
