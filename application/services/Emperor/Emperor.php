<?php

namespace Services\Emperor;

class Emperor
{

	//创建静态私有的变量保存该类对象
	private static $emperor;

	//防止使用new直接创建对象
	private function __construct() {
	}

	//防止使用clone克隆对象
	private function __clone() {
	}

	//获取该类的单例实例
	public static function getInstance() {
		//判断$emperor是否是Emperor的对象，不是则创建
		if ( ! self::$emperor instanceof self) {
			self::$emperor = new self();
		}
		return self::$emperor;
	}

	public static function say() {
		printr("我就是皇帝，只有我一个");
	}
}
