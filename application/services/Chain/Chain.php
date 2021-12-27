<?php


namespace Services\Chain;

/**
 * 责任链封装类
 * Class Chain
 * @package Services\Chain
 */
class Chain
{
	//第一个处理者
	private $handler;

	public function __construct() {
		$handler1 = new ConcreteHandler1();
		$handler2 = new ConcreteHandler2();
		$handler3 = new ConcreteHandler3();

		//设置链的顺序
		$handler1->setNext($handler2);
		$handler2->setNext($handler3);

		//返回第一个处理者
		$this->handler = $handler1;

	}

	/**
	 * 获取第一个处理者
	 * @return Handler
	 */
	public function getHandler(): Handler {
		return $this->handler;
	}
}
