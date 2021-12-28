<?php

namespace Services\Mediator;

/**
 * 抽象中介者
 * Class Mediator
 */
abstract class Mediator
{
	//定义同事类
	protected $c1;
	protected $c2;

	/**
	 * @param mixed $c1
	 */
	public function setC1($c1): void {
		$this->c1 = $c1;
	}

	/**
	 * @param mixed $c2
	 */
	public function setC2($c2): void {
		$this->c2 = $c2;
	}

	//中介者模式的业务逻辑，通常是发送消息给同事
	public abstract function send(Colleague $colleague , $message): void;
}
