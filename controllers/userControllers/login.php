<?php 
$_POST = json_decode(file_get_contents('php://input'), true);
$name = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
//Потом перепишу защищенную версию через Database::select, сейчас не успеваю.
//$dbq = Database::query("SELECT password FROM Users WHERE name='{$name}'");

$dbq = Database::select('Users', 'password', ['name' => $name]);

if (count($dbq) !== 1) {
	echo json_encode(['verified' => false]);
	die();
}
$hash = $dbq[0]->password;
$verified = password_verify($password, $hash);
if ($verified) {
	$_SESSION['admin'] = true;
	echo json_encode(['verified' => true]);
} else {
	echo json_encode(['verified' => false]);
}

?>
