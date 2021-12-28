<?php


namespace Services\Mediator;

/**
 * 具体中介者
 * Class ConcreteMediator
 * @package Services\Mediator
 */
class ConcreteMediator extends Mediator
{
	/**
	 * 发送信息给其他的同事
	 * @param Colleague $colleague
	 * @param           $message
	 */
	public function send(Colleague $colleague , $message): void {
		//如果是同事1发出的请求，同事2去响应
		if ($colleague == $this->c1) {
			$this->c2->notify($message);
		} else {
			$this->c1->notify($message);
		}
	}
}
