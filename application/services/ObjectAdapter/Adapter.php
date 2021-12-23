<?php


namespace Services\ObjectAdapter;

/**
 * 适配器角色
 * Class Adapter
 * @package Services\ObjectAdapter
 */
class Adapter implements Target
{
	private $adaptee;

	public function __construct(Adaptee $adaptee) {
		$this->adaptee = $adaptee;
	}

	/**
	 * 该方法实现适配逻辑
	 */
	public function request(): void {
		$this->adaptee->doSomething();

	}
}
