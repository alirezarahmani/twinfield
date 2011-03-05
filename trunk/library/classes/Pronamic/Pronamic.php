<?php

namespace Pronamic;

class Pronamic {
	const DS = DIRECTORY_SEPARATOR;

	public static $libraryDir = '';

	public static $rootPath = '';

	public static $classPath = '';

	public static function autoload($name) {
		$file = self::$libraryDir . self::DS . 'classes' . self::DS . $name . '.php';

		if(is_file($file)) {
			include $file;
		}
	}
}
