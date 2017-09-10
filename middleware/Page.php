<?php 
class Page {
	private static $layout;

	public static function layout($layoutPath) {
		self::$layout = $layoutPath; 
	}

	public static function render($path = 'views/errors/500.view.php', $arguments = []) {
		foreach($arguments as $key => $value) {
			${$key} = $value;
		}
		if (self::$layout !== null) {
			require self::$layout;
		} else {
			require $path;
		}	
	}
}

?>