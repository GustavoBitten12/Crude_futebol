<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];

    $sql = "INSERT INTO times (nome, cidade) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $cidade]);

    header("Location: read.php");
}
?>
<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Cidade: <input type="text" name="cidade" required><br>
    <button type="submit">Salvar</button>
</form>