<?php
require '../config.php';
$id = $_GET['id'];
$pdo->prepare("DELETE FROM times WHERE id=?")->execute([$id]);
header("Location: read.php");
?>