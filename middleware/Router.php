<?php 
class Router {
	protected static $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function get($uri, $controller) {
		self::$routes['GET'][$uri] = $controller;
	}

	public static function post($uri, $controller) {
		self::$routes['POST'][$uri] = $controller;
	}

	public static function go() {
		//Парсим uri для получения реального пути
		$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
		//Непосредственно сам роутинг
		$method = $_SERVER['REQUEST_METHOD'];
		if (array_key_exists($path, self::$routes[$method])) {
			require self::$routes[$method][$path];
			return true;
		}

		Page::render('views/errors/404.view.php');
		return false;
	}
}

?>