<?php


namespace Services\Mediator;

/**
 * 具体同事类
 * Class ConcreteColleague2
 * @package Services\Mediator
 */
class ConcreteColleague2 extends Colleague
{
	//同事类自己的方法，可以响应中介者的通知
	public function notify($message) {
		printr("同事2收到消息：" . $message . "，开始执行动作");
	}

	//依赖方法，需要委托中介者去完成
	public function send($message) {
		//处理自己的业务逻辑
		//自己不能处理的业务逻辑， 委托给中介者处理
		printr("同事2发出请求：" . $message);
		$this->mediator->send($this , $message);
	}
}
