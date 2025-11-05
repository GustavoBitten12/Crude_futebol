<?php
require '../config.php';
$times = $pdo->query("SELECT * FROM times")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $posicao = $_POST['posicao'];
    $numero = $_POST['numero_camisa'];
    $time_id = $_POST['time_id'];

    if ($numero < 1 || $numero > 99) die("Número da camisa inválido!");

    $sql = "INSERT INTO jogadores (nome, posicao, numero_camisa, time_id) VALUES (?, ?, ?, ?)";
    $pdo->prepare($sql)->execute([$nome, $posicao, $numero, $time_id]);
    header("Location: read.php");
}
?>
<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Posição: 
    <select name="posicao">
        <option>Goleiro</option>
        <option>Zagueiro</option>
        <option>Lateral</option>
        <option>Meia</option>
        <option>Atacante</option>
    </select><br>
    Camisa: <input type="number" name="numero_camisa" min="1" max="99" required><br>
    Time: 
    <select name="time_id">
        <?php foreach ($times as $t): ?>
            <option value="<?= $t['id'] ?>"><?= $t['nome'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Salvar</button>
</form>