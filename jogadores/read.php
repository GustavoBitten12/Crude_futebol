<?php
require '../config.php';
$sql = "SELECT j.*, t.nome as time_nome FROM jogadores j 
        LEFT JOIN times t ON j.time_id = t.id";
$jogadores = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Jogadores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

  <h1 class="mb-4">Jogadores</h1>
  <a href="create.php" class="btn btn-primary mb-3">Novo Jogador</a>

  <table class="table table-striped table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Posição</th>
        <th>Camisa</th>
        <th>Time</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($jogadores as $j): ?>
      <tr>
        <td><?= $j['id'] ?></td>
        <td><?= $j['nome'] ?></td>
        <td><?= $j['posicao'] ?></td>
        <td><?= $j['numero_camisa'] ?></td>
        <td><?= $j['time_nome'] ?></td>
        <td>
          <a href="update.php?id=<?= $j['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
          <a href="delete.php?id=<?= $j['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir jogador?')">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>