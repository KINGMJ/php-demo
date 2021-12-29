<?php

namespace Events;

/**
 * Autoloads Board classes
 * @license   MIT License
 */
class Autoloader
{
	/**
	 * @var string
	 */
	private $dir;

	/**
	 * @param string $dir
	 */
	public function __construct($dir = NULL) {
		if (is_null($dir)) {
			$dir = dirname(__FILE__) . '/..';
		}
		$this->dir = $dir;
	}

	/**
	 * Registers Board\Autoloader as an SPL autoloader.
	 * @param null $dir
	 */
	public static function register($dir = NULL) {
		ini_set('unserialize_callback_func' , 'spl_autoload_call');
		spl_autoload_register(array(new self($dir) , 'autoload'));
	}

	/**
	 * Handles autoloading of classes.
	 * @param string $class - A class name.
	 */
	public function autoload($class) {
		if (0 !== strpos($class , 'Events\\')) {
			return;
		}

		$class = substr($class , strlen("Events\\"));

		// class里的 \ 都转换为 / ，不然linux服务器不认
		$file = rtrim($this->dir , ".") . str_replace('\\' , '/' , $class) . '.php';
		if (file_exists($file)) {
			require $file;
		}
	}
}

Autoloader::register();