<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<?php require_once 'links.php' ?>
</head>
<body>
	<?php 
		require_once 'nav.php'; 
		require_once 'loginModal.php';
		require_once 'postCreationModal.php';
	?>

	<div class="container mainarea">
		<?php require $path; ?>
	</div>

	<?php require_once 'scripts.php' ?>	
</body>
</html>