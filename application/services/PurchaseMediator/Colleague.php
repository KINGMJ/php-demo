<?php

namespace Services\PurchaseMediator;

/**
 * 抽象同事类
 * Class Colleague
 * @package Services\Mediator
 */
abstract class Colleague
{
	//同事类中必须有中介者类，使用构造函数传入
	protected $mediator;

	public function __construct(Mediator $mediator) {
		$this->mediator = $mediator;
	}
}
