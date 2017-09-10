<?php
//Здесь можно добавить путь

Router::get('', 'controllers/main.php');
Router::get('about', 'controllers/about.php');
Router::post('login', 'controllers/userControllers/login.php');

if ($_SESSION['admin']) {
	Router::get('logout', 'controllers/userControllers/logout.php');
	Router::post('post/create', 'controllers/postControllers/create.php');
	Router::post('post/update', 'controllers/postControllers/update.php');
	Router::post('post/delete', 'controllers/postControllers/delete.php');
}

?>