<?php 
$_POST = json_decode(file_get_contents('php://input'), true);
$id = htmlspecialchars($_POST['id']);

Database::delete('Posts', [
	'id' => $id
]);

echo "deleted";

?>
