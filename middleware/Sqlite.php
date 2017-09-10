<?php
class Sqlite extends Database {	
	public function __construct($name) {
		try {
			self::$db = new PDO("sqlite:{$name}");
		} catch (PDOexception $e) {
			die($e->getMessage());
		}
		
	}
}

?>

