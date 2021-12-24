<?php


namespace Services\Decorator;

/**
 * 具体装饰角色，给被装饰者添加额外的功能
 * Class ConcreteDecorator
 * @package Services\Decorator
 */
class ConcreteDecorator extends Decorator
{
	public function operation(): void {
		parent::operation();
		$this->addedFunction();
	}

	public function addedFunction() {
		printr("为具体构件角色增加额外的功能addedFunction()");
	}
}
