<?php


namespace Services\Command;


class ConcreteReceiver2 implements Receiver
{

	public function action(): void {
		printr("接收者2要完成的任务");
	}
}
