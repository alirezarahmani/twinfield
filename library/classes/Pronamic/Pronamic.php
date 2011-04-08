<?php

namespace Pronamic;

class Pronamic {
	/**
	 * The directory seperator
	 * 
	 * @var char
	 */
	const DS = DIRECTORY_SEPARATOR;

	///////////////////////////////////////////////////////////////////////////	

	/**
	 * The library directory
	 * 
	 * @var string
	 */
	public static $libraryDir = '';

	/**
	 * The root path
	 * 
	 * @var string
	 */
	public static $rootPath = '';

	/**
	 * The class path
	 * 
	 * @var string
	 */
	public static $classPath = '';

	///////////////////////////////////////////////////////////////////////////	

	/**
	 * Autoload the specified class or interface
	 * 
	 * @param string $name
	 */
	public static function autoload($name) {
		$name = str_replace('\\', self::DS, $name);

		$file = self::$libraryDir . self::DS . 'classes' . self::DS . $name . '.php';

		if(is_file($file)) {
			require_once $file;
		}
	}
}
