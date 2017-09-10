<?php
$posts = array_reverse(Database::query('SELECT * FROM Posts'));

Page::render('views/main.view.php', ['posts' => $posts]);
 
?>
