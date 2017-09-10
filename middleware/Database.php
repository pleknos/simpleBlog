<?php
Class Database {
	protected static $db;

	public static function insert($table, $model = null, $params) {
		$queryString = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
			$table, 
			implode( ', ', array_keys($params) ),
			':' . implode( ', :', array_keys($params) )
		);
		self::query($queryString, $model, $params);
	}

	public static function select($table, $item, $params) {
		//Бред, конечно, но на пока - сойдет.
		$queryString = sprintf('SELECT %s FROM %s WHERE %s = %s', 
			$item,
			$table, 
			implode(array_keys($params)),
			':' . implode(array_keys($params))
		);
		$response = self::query($queryString, null, $params);
		return $response;
	}

	public static function delete($table, $params) {
		//Бред, конечно, но на пока - сойдет. #2
		$queryString = sprintf('DELETE FROM %s WHERE %s = %s', 
			$table, 
			implode(array_keys($params)),
			':' . implode(array_keys($params))
		);

		self::query($queryString, null, $params);
	}

	public static function query($queryString, $model = null, $params = null) {
		$statement = self::$db->prepare($queryString);
		if ($statement) {
			if ($params == null) {
				$statement->execute();
			} else {
				$statement->execute($params);
			}	
		} else {
			die("Wrong query string");
		}
		
		if ($model == null) {
			return  $statement->fetchAll(PDO::FETCH_OBJ);
		} else {
			return  $statement->fetchAll(PDO::FETCH_CLASS, $model);
		}
		
	}
}

?>