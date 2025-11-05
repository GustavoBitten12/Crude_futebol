<?php
require '../config.php';
$sql = "SELECT p.*, c.nome as casa, f.nome as fora 
        FROM partidas p
        JOIN times c ON p.time_casa_id = c.id
        JOIN times f ON p.time_fora_id = f.id";
$partidas = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Partidas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

  <h1 class="mb-4">Partidas</h1>
  <a href="create.php" class="btn btn-primary mb-3">Nova Partida</a>
  <a href="../index.php" class="btn btn-secondary mb-3">⬅ Voltar</a>

  <table class="table table-striped table-bordered text-center">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Casa</th>
        <th>Fora</th>
        <th>Data</th>
        <th>Placar</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($partidas as $p): ?>
      <tr>
        <td><?= $p['id'] ?></td>
        <td><span class="fw-bold"><?= $p['casa'] ?></span></td>
        <td><span class="fw-bold"><?= $p['fora'] ?></span></td>
        <td><?= date("d/m/Y", strtotime($p['data_jogo'])) ?></td>
        <td><span class="badge bg-success"><?= $p['gols_casa'] ?></span> x <span class="badge bg-danger"><?= $p['gols_fora'] ?></span></td>
        <td>
          <a href="update.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
          <a href="delete.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir partida?')">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>