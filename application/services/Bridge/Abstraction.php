<?php


namespace Services\Bridge;

/**
 * 抽象化角色，定义角色行为，保持一个对实现化角色的引用
 * Class Abstraction
 * @package Services\Bridge
 */
abstract class Abstraction
{
	private $imp;

	public function __construct(Implementor $imp) {
		$this->imp = $imp;
	}

	//自身的行为和属性
	public function request(): void {
		$this->imp->doSomething();
	}

	//获得实现化角色
	public function getImp(): Implementor {
		return $this->imp;
	}
}
