<?php 
$_POST = json_decode(file_get_contents('php://input'), true);
$name = htmlspecialchars($_POST['name']);
$text = htmlspecialchars($_POST['text']);
Database::insert('Posts', 'Post', [
	'name' => $name,
	'text' => $text
]);

?>
