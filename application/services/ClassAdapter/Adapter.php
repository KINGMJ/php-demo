<?php


namespace Services\ClassAdapter;

/**
 * 适配器角色
 * Class Adapter
 * @package Services\ClassAdapter
 */
class Adapter extends Adaptee implements Target
{

	/**
	 * 该方法实现适配逻辑
	 */
	public function request(): void {
		self::doSomething();
	}
}
