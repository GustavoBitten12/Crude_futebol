<?php
require '../config.php';

$id = $_GET['id'];
$time = $pdo->prepare("SELECT * FROM times WHERE id=?");
$time->execute([$id]);
$time = $time->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $sql = "UPDATE times SET nome=?, cidade=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $cidade, $id]);
    header("Location: read.php");
}
?>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $time['nome'] ?>" required><br>
    Cidade: <input type="text" name="cidade" value="<?= $time['cidade'] ?>" required><br>
    <button type="submit">Salvar</button>
</form>