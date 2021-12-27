<?php


namespace Services\Command;


class ConcreteCommand1 implements Command
{
	//命令类持有接收者对象
	private $receiver;

	public function __construct(Receiver $receiver) {
		$this->receiver = $receiver;
	}

	public function execute(): void {
		$this->receiver->action();
	}
}
