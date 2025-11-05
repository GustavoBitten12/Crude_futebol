<?php
require '../config.php';
$times = $pdo->query("SELECT * FROM times")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $time_casa = $_POST['time_casa_id'];
    $time_fora = $_POST['time_fora_id'];
    $data = $_POST['data_jogo'];

    if ($time_casa == $time_fora) die("Uma partida não pode ter o mesmo time em casa e fora!");

    $sql = "INSERT INTO partidas (time_casa_id, time_fora_id, data_jogo) VALUES (?, ?, ?)";
    $pdo->prepare($sql)->execute([$time_casa, $time_fora, $data]);
    header("Location: read.php");
}
?>
<form method="POST">
    Time Casa: 
    <select name="time_casa_id">
        <?php foreach ($times as $t): ?>
            <option value="<?= $t['id'] ?>"><?= $t['nome'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Time Fora: 
    <select name="time_fora_id">
        <?php foreach ($times as $t): ?>
            <option value="<?= $t['id'] ?>"><?= $t['nome'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Data: <input type="date" name="data_jogo" required><br>
    <button type="submit">Salvar</button>
</form>