<?php
//Блог по задумке ведется только одинм человеком, более сложную логику пока писать нет смысла
session_start();
if(!isset($_SESSION['admin'])) {
	$_SESSION['admin'] = false;
}

//Autoload
require 'middleware/Database.php';
require 'middleware/Sqlite.php';
require 'middleware/Page.php';
require 'middleware/Router.php';
require 'models/Post.php';
require 'routes.php';

//Инициальзация базы данных SQLite [class Sqlite extends Database]
new Sqlite('database/db.sqlite');

//Задаем Layout для всех стрниц
Page::layout("views/shared/layout.php");

//Запускаем роутер
Router::go();

?>