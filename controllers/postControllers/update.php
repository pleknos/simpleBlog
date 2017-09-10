<?php 
$_POST = json_decode(file_get_contents('php://input'), true);
$id = htmlspecialchars($_POST['id']);
$name = ($_POST['name']);
$text = htmlspecialchars($_POST['text']);
Database::query("UPDATE Posts SET name = '{$name}', text='{$text}' WHERE id='{$id}'");
echo 'updated';
?>
