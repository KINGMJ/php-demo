<?php

namespace demo6;

/**
 * Autoloads OAuth2 classes
 * @author    Brent Shaffer <bshafs at gmail dot com>
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
	 * Registers OAuth2\Autoloader as an SPL autoloader.
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
		if (0 !== strpos($class , 'demo6')) {
			return;
		}
		if (file_exists($file = $this->dir . '/' . str_replace('\\' , '/' , $class) . '.php')) {
			require $file;
		}
	}
}

Autoloader::register();